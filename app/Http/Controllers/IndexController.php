<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Exception;

class IndexController extends Controller
{
    //
    protected $message;
    protected $header;
    public $error;
    public function __construct(){
    	$this->header = 'Высочайшие точки стран!';
    	$this->message = 'На этой страничке представлен список стран по их наивысшим точкам';
    }
    public function index() {
    	$articles = Article::select(['id','mount_name','country','description','height','image','views'])->get();
    	//dump($articles);
    	
    	
    	return view('page')->with(['message'=>$this->message,
    								'articles'=>$articles,
    								'header'=>$this->header
    								]);
    }
  	public function show($id) {
  		//$article = Article::find($id);
  		//SELECT 'id','mount_name','country','description','height','image' WHERE 'id'=$id     first()
  		$article=Article::select(['id','mount_name','country','description','height','image','views'])->where('id',$id)->increment('views', 1);
      
      $article=Article::select(['id','mount_name','country','description','height','image','views'])->where('id',$id)->first();
  		$article = Article::select(['mount_name','id','country','description','height','image'])->where('id',$id)->first();
  		return view('article-content')->with(['message'=>$this->message,
    										'article'=>$article,
    										'header'=>$this->header]);
  	}

  	public function add(){
  		return view('add-content')->with(['message'=>$this->message,
  										'header'=>$this->header
  										]);
  	}

  	public function store(Request $request){
  		try{

    		if (isset($_POST)) {
  			$filename=$_FILES['image']['name'];

		    $blacklist = ['.php', '.phtml', '.php3', '.php4', '.html', '.htm','.doc','.docx','.txt'];
		    foreach ($blacklist as $item) {
		        if (preg_match("/$item$/", $_FILES['image']['name'])){throw new Exception('Расширение файла не подходит!');
		        }
		    }
		    
		    $type = getimagesize($_FILES['image']['tmp_name']);
		    if ($type && ($type['mime'] != 'image/png' || 
		    $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		        if ($_FILES['image']['size'] < 1024 * 10000) {
		            $upload = 'D:\Восстановлено\open server\OSPanel\domains\laravel\public\img\\'.$_FILES['image']['name'];
		            $data=$request->all();
			        $article = new Article;
			        $article->fill($data);
			        $article->save();

		    $query=Article::select(['id','image'])->where('id',$article->id)->update(['image' => $filename]);
		            if (move_uploaded_file($_FILES['image']['tmp_name'], $upload)) {return redirect('/');}
		            else {throw new Exception('Ошибка при загрузке файла');
		        }
		        }
		        else {throw new Exception('Размер файла превышен!');
		    }
		    }
		    else {throw new Exception('Тип файла не подходит');}
    		}
    	}
    	catch(Exception $e){
    		$this->error=$e->getMessage();
    		return view('add-content')->with(['message'=>$this->message,'header'=>$this->header,'error'=>$this->error]);
    	}
  	}
}
