        @extends('layouts.app')

        @section('title','Student')

        @section('page-title','Student')

        @section('dashboard-content')
        <a href="#" class="btn btn-primary">
            Tambah
        </a>
        <table class="table">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->nim}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <a href="#" class="btn btn-success">
                        <i class="fa fa-pencil"></i>
                    </a>
                    {{csrf_field()}}
                     {{method_field('DELETE')}}
                    <a href="#" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>

 

         <form class="form-horizontal " action="{{ url('student')}}" method="POST">
             {{ csrf_field() }} 
            <div class="form-group">
            <table>
                <tr>
                   <td><input type="text" class="form-control" id="nim" name="nim" value="" placeholder="NIM"> </td>
                   <td><input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="" placeholder="Nama"> </td>
                   <td><input type="text" class="form-control" id="alamat" name="alamat" value="" placeholder="Alamat"> </td>
                   <td><input type="text" class="form-control" id="no_tlp" name="no_tlp" value="" placeholder="No tlp"> </td>
                   <td><button type="submit" class="btn btn-success" value="simpan"><i class="fa fa-plus m-r-10" aria-hidden="true"></i>Tambah</button></td>
               </tr>
           </tbody>
        </table>
        </div>
        </form>
         @foreach($errors->all() as $error) 
              <div class="alert alert-danger">
                <ul>
                 {{ $error }}
               </ul>
             </div>
             @endforeach  
        

        @endsection
