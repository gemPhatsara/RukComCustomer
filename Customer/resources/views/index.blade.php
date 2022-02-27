<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/DataTables.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Customer</title>
</head>
<body>
    <div class="contrainer" style="margin: 5em">
        <h1>
            Customers
        </h1>
        <div>
            <button type="button" class="btn-primary btn" id="addbtn" style="margin-bottom: 1em">เพิ่ม</button>
        </div>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Fullname
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($res as $item)
                <tr>
                    <td>
                        {{$item->id}}
                    </td>
                    <td>
                        {{$item->firstname." ".$item->lastname}}
                    </td>
                    <td>
                        <button type="button"  class="btn btn-warning editbtn" data-id="{{$item->id}}">แก้ไข</button>
                        <button type="button"  class="btn btn-danger delbtn" data-id="{{$item->id}}">ลบ</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



    </div>
</body>
<div class="modal" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="{{route('insertCustomer')}}" method="POST" id="form-customer">
                @csrf
                <div class="form-group col-md-12">
                    <label for="">ชื่อ</label>
                    <input type="text" class="form-control" id="" name="fname" placeholder="ชื่อ">
                </div>
                <div class="form-group col-md-12">
                    <label for="">นามสกุล</label>
                    <input type="text" class="form-control" id="" name="lname" placeholder="นามสกุล">
                </div>
                <div class="form-group col-md-12 row">
                    <div class="col-md-6">
                        <label for="">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" id="" name="phone" placeholder="เบอร์โทรศัพท์" maxlength="10">
                    </div>
                    <div class="col-md-6">
                        <label for="">อีเมล</label>
                        <input type="text" class="form-control" id="" name="email" placeholder="email@example.com">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="submit">เพิ่ม</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                </div>
            </form>
        </div>

        </div>
    </div>
</div>

<!-- Modal Del-->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="">Delete Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 id="">Are you sure?</h5>
                <p>You won't be able to revert this!</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-danger" id="delbtn">ลบ</button>
            </div>
        </div>
        </div>
    </div>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{URL::asset('js/DataTables.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script>
    $( document ).ready(function() {
        var idCustomer = ''
        $('#myTable').DataTable({
            "pageLength" : 15,
            "lengthMenu" :[15,30]
        })
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('input[name="_token"]').val()
            }
        })
        $('#addbtn').click(function(){
            $('input[name="fname"]').val('')
            $('input[name="lname"]').val('')
            $('input[name="phone"]').val('')
            $('input[name="email"]').val('')
            $('.modal-title').html('Add Customer')
            $('button#submit').html('เพิ่ม')
            $('form#form-customer').attr('action',"{{route('insertCustomer')}}")
            showModal();
        });
        $("body").delegate(".editbtn","click",function(event){
            const id = $(this).attr('data-id')
            const url = "{{route('editCustomer')}}"
            $.ajax({
                url: url,
                data: {'id': id},
                type: 'POST',
                dataType: 'json',
                success: function(response){
                    $('input[name="fname"]').val(response.firstname)
                    $('input[name="lname"]').val(response.lastname)
                    $('input[name="phone"]').val(response.phone)
                    $('input[name="email"]').val(response.email)
                    $('.modal-title').html('Edit Customer')
                    $('button#submit').html('แก้ไข')
                    $('form#form-customer').attr('action',"{{route('updateCustomer')}}?id="+id)
                }
            })
            showModal();
        });
        $("body").delegate(".delbtn","click",function(event){
            $('#delModal').modal('show')
            idCustomer = $(this).attr('data-id')
        })
        $('#delbtn').click(function(){
            const url = "{{route('deleteCustomer')}}?id="+idCustomer
            window.location.replace(url)
        })

        function showModal(){
            $('#addModal').modal('show')
        }

    });

</script>

