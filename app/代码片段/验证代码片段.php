<?php
namespace App\Http\Controllers;
use App\StudentModel;
use Illuminate\Http\Request;
class StudentController extends Controller{
    
    //1.分页设计
    public function show(){
        $students= StudentModel::paginate(5); 
       
        return view('student.index',['students'=>$students]);
    }

    //2.传入数据验证
    public function create(Request $request){
        $student=new StudentModel();

        if($request->isMethod('POST')){
            // //1 控制器验证
            // $this->validate($request,[
            //     'student.name'=>'required|min:2|max:12',
            //     'student.age'=>'required|integer',
            //     'student.sex'=>'required|integer',],
            //     ['required'=>":attribute 必填",
            //      'min'=>':attribute 不能小于2个字符',
            //      'man'=>':attribute 不能大于12个字符',
            //     ],
            //     ['student.name'=>"学生姓名",
            //      'student.age'=>"学生年龄",
            //      'student.sex'=>"学生性别",
            //     ]
            // );
            //2.validate类验证
             $validator=\Validator::make($request->input(),[
                'student.name'=>'required|min:2|max:12',
                'student.age'=>'required|integer',
                'student.sex'=>'required|integer',],
                ['required'=>":attribute 必填",
                 'min'=>':attribute 不能小于2个字符',
                 'man'=>':attribute 不能大于12个字符',
                 'integer'=>'必须为整数',
                ],
                ['student.name'=>"学生姓名",
                 'student.age'=>"学生年龄",
                 'student.sex'=>"学生性别",
                ]);

            //输出错误信息
            if($validator->fails()){ 
                return redirect()->back()->withErrors($validator)->withInput();//withInput()是为了数据保持用的
            }
            
            $data=$request->input('student');
                if(StudentModel::create($data)){
                    return redirect('student')->with('seccess','录入成功！');
                }else{
                    return redirect()->back();
                }
        }else{
            return view('student.create',['student'=>$student]);
            }  
    }
    
    //保存数据
    public function save(Request $request){
        $data=$request->input('student');
        //var_dump($data);
        $student= new StudentModel();
        $student->name=$data['name'];
        $student->age=$data['age'];
        $student->sex=$data['sex'];
        if($student->save()){
            return redirect("student");
        }else{
            return redirect()->back();
        }
    }

    //更新数据
    public function update($id){
        $students=new StudentModel();
        $student=StudentModel::find($id);
       
        return view('student.update',['student'=>$student,'students'=>$students]);
    }
    

    //删除数据
    public function delete($id)
    {

        $student = StudentModel::find($id);

        if ($student->delete()) {
            return redirect('student')->with('seccess', '删除成功-' . $id);
        } else {
            return redirect('student')->with('error', '删除失败-' . $id);
        }
    }
}


