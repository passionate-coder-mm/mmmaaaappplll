@extends('Backend.backendmaster')
@section('home-active','active')
@section('title', 'MMPL | home')
@section('content')
<section class="content" >
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Home Options</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">Header</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Institute</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab3">Clients</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab4">Expertise</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab5">Video URL</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab6">Contact Messages </a></li>
        </ul>
        <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                        <section class="content" id="headerreftext">
                        <div class="box box-info">
                                <div class="box-header with-border">
                                <h3 class="box-title">Header Text</h3>
                                
                                </div>
                                {!!Form::open(['class' => 'form-horizontal','id'=>'headertext','enctype'=>'multipart/form-data'])!!}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Title One</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title_1" name="title_1" value="{{$data['header']->title_1}}">
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{$data['header']->id}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Title Two</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title_2" name="title_2" value="{{$data['header']->title_2}}">                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-8">
                                        <textarea class="form-control" name="description" id="description" rows="5">{{$data['header']->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                                {!!Form::close()!!}
                            </div>
                        </section>
                        <script>
                             $(document).ready(function () {
                                $('#headertext').validate({ 
                                    rules: {
                                        title_1: 
                                        {
                                            required: true,
                                            
                                        },
                                        title_2: 
                                        {
                                            required: true,
                                            
                                        },
                                        description: 
                                        {
                                            required: true,
                                            
                                        },
                                        
                                    },
                                    
                                    highlight: function(element) {
                                        $(element).parent().addClass('has-error');
                                    },
                                    unhighlight: function(element) {
                                        $(element).parent().removeClass('has-error');
                                    },
                                });
                                });
                                $(document).on('submit','#headertext',function(e){
                                    e.preventDefault();
                                    //var data = $(this).serialize();
                                    if ($('#headertext').valid()) {
                                    $.ajax({
                                        url:"{!! route('mmplhome.store') !!}",
                                        method:"POST",
                                    data:new FormData(this),
                                    dataType:'JSON',
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                        success:function(data)
                                        {
                                        //console.log(data);
                                        toastr.options = {
                                                "debug": false,
                                                "positionClass": "toast-bottom-right",
                                                "onclick": null,
                                                "fadeIn": 300,
                                                "fadeOut": 1000,
                                                "timeOut": 5000,
                                                "extendedTimeOut": 1000
                                                };
                                        toastr.success('Data Updated Successfully');
                                            
                                
                                        $("#headerreftext").load(location.href + " #headerreftext");
                                        }
                                        
                                    });
                                }
                            })
                   </script>
              </div>
              <div id="tab2" class="tab-pane fade in ">
                    <section class="content" id="institute">
                    <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Header Text</h3>
                            
                            </div>
                            {!!Form::open(['class' => 'form-horizontal','id'=>'headertext','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title One</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="title_1" name="title_1" value="{{$data['header']->title_1}}">
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{$data['header']->id}}">
                                   </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title Two</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="title_2" name="title_2" value="{{$data['header']->title_2}}">                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-8">
                                    <textarea class="form-control" name="description" id="description" rows="5">{{$data['header']->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </section>
                    <script>
                         $(document).ready(function () {
                            $('#headertext').validate({ 
                                rules: {
                                    title_1: 
                                    {
                                        required: true,
                                        
                                    },
                                    title_2: 
                                    {
                                        required: true,
                                        
                                    },
                                    description: 
                                    {
                                        required: true,
                                        
                                    },
                                    
                                },
                                
                                highlight: function(element) {
                                    $(element).parent().addClass('has-error');
                                },
                                unhighlight: function(element) {
                                    $(element).parent().removeClass('has-error');
                                },
                            });
                            });
                            $(document).on('submit','#headertext',function(e){
                                e.preventDefault();
                                //var data = $(this).serialize();
                                if ($('#headertext').valid()) {
                                $.ajax({
                                    url:"{!! route('mmplhome.store') !!}",
                                    method:"POST",
                                data:new FormData(this),
                                dataType:'JSON',
                                contentType: false,
                                cache: false,
                                processData: false,
                                    success:function(data)
                                    {
                                    //console.log(data);
                                    toastr.options = {
                                            "debug": false,
                                            "positionClass": "toast-bottom-right",
                                            "onclick": null,
                                            "fadeIn": 300,
                                            "fadeOut": 1000,
                                            "timeOut": 5000,
                                            "extendedTimeOut": 1000
                                            };
                                    toastr.success('Data Updated Successfully');
                                        
                            
                                    $("#headerreftext").load(location.href + " #headerreftext");
                                    }
                                    
                                });
                            }
                        })
               </script>
            </div>
              <div id="tab3" class="tab-pane fade in">
                    <section class="content">
                       <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Our Clients </h3>
                            </div>
                            {!!Form::open(['class' => 'form-horizontal','id'=>'client','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name">
                                <input type="hidden" name="path" id="path" value="{{url('/')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-8">
                                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                                </div>
                            </div>
                           <div class="form-group">
                            <label for="link" class="col-sm-2 control-label">Client Logo</label>
                            <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="image" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                                <label for="link" class="col-sm-2 control-label">Client Site Url</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="url" name="url" placeholder="http://weaverbd.com">
                                </div>
                              </div>
                            
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </section>
                     <section class="content">
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box box-info">
                                  <div class="box-header">
                                    <h3 class="box-title">Clients</h3>
                                     <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                      </div>
                                     </div>
                                  <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped clientprepend">
                                      <thead>
                                      <tr>
                                        <th width="20%">Name</th>
                                        <th width="20%">Photo</th>
                                        <th width="20%">URL</th>
                                        <th width="15%">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody class="">
                                        @foreach($data['clients'] as $client)
                                       <tr class='unqclient{{$client->id}}'>
                                           <td>{{$client->name}}</td>
                                           <td><img src="{{url('/'.$client->image)}}" width="150" height="70"></td>
                                           <td>{{$client->name}}</td>
                                            <td>
                                                <a data-id ="{{$client->id}}" data-toggle="modal" data-target="#clientupdate" class="editclient"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                <a class="deleteclient" data-id ="{{$client->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                            </td>
                                        </tr>
                                      @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div>
                              <!-- /.col -->
                            </div>
                        </section>
                        <div class="modal fade" id="clientupdate">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Client Info</h4>
                                    </div>
                                      <div class="modal-body">
                                          {!!Form::open(['class' => 'form-horizontal','id'=>'updateclient','enctype'=>'multipart/form-data'])!!}
                                          <div class="box-body">
                                            <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Name</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" name="name">
                                                <input type="hidden" class="form-control" id="id" name="id" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Description</label>
                                                <div class="col-sm-8">
                                                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label for="link" class="col-sm-2 control-label">Site Url</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" id="url" name="url" placeholder="http://weaverbd.com">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label for="link" class="col-sm-2 control-label">Image</label>
                                        <div class="col-sm-8">
                                        <input type="file" class="form-control" id="image" name="image" placeholder="">
                                       

                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label"></label>
                                        <div class="col-md-10">
                                            <img id="myImage" class="img-responsive" width="150" height="70" src="" alt="">
                                        </div>
                                      </div>
                                        
                                        </div>
                                          <div class="box-footer">
                                              <button type="submit" class="btn btn-info">Update</button>
                                          </div>
                                          {!!Form::close()!!}
                                    </div>
                                  </div>
                               </div>
                        </div>
                <script>
                    $(document).ready(function () {
                        $('#client').validate({ 
                        rules: {
                                
                            name: 
                                {
                                required: true,
                                
                                },
                                description: 
                                {
                                required: true,
                                
                                },
                                image: 
                                {
                                required: true,
                                
                                },
                                url: 
                                {
                                required: true,
                                
                                },
                                
                                
                        },
                        
                        highlight: function(element) {
                            $(element).parent().addClass('has-error');
                        },
                        unhighlight: function(element) {
                            $(element).parent().removeClass('has-error');
                        },
                        });
                        
                    });
                    $('#client').on('submit',function(e){
                        e.preventDefault();
                        //var data = $(this).serialize();
                        var base_url = $('#client').find('#path').val();
                        if ($('#client').valid()) {
                            $.ajax({
                            url:"{{route('client.store')}}",
                            method:"POST",
                            data:new FormData(this),
                            dataType:'JSON',
                            contentType: false,
                            cache: false,
                            processData: false,
                            success:function(data)
                            {
                                //console.log(data);
                                toastr.options = {
                                        "debug": false,
                                        "positionClass": "toast-bottom-right",
                                        "onclick": null,
                                        "fadeIn": 300,
                                        "fadeOut": 1000,
                                        "timeOut": 5000,
                                        "extendedTimeOut": 1000
                                    };
                                toastr.success('Data Inserted Successfully');
                                $('.clientprepend').prepend(`<tr class='unqclient`+data.id+`'>
                                <td>`+data.name+`</td>
                                <td><img src="`+base_url+`/`+data.image+`" width="150" height="70"></td>
                                <td>`+data.url+`</td>
                                <td>
                                    <a data-id ="`+data.id+`" data-toggle="modal" data-target="#clientupdate" class="editclient"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                    <a class="deleteclient" data-id ="`+data.id+`" ><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                </td>
                                </tr>`);          
                                $('#client').trigger('reset');
                            }
                            
                        });
                        }
                    });
                    $(document).on('click','.editclient',function(){
                        var id = $(this).data('id');
                        var base_url = $('#client').find('#path').val();
                        $.ajax({
                        url: "{!! route('client.edit') !!}",
                        type: "get", 
                        data: {  
                            id: id, 
                        },
                        success: function(data) {
                            var img = data.image;
                            var srcimg= base_url+'/'+img;
                            $('#updateclient').find('#name').val(data.name);
                            $('#updateclient').find('#description').val(data.description);
                            $('#updateclient #myImage ').attr("src", srcimg);
                            $('#updateclient').find('#id').val(data.id);
                            $('#updateclient').find('#url').val(data.url);
                           
        
                         }
                        });
                    })
                    $(document).ready(function () {
                        $('#updateclient').validate({ 
                        rules: {
                                
                            name: 
                                {
                                required: true,
                                
                                },
                                description: 
                                {
                                required: true,
                                
                                },
                                url: 
                                {
                                required: true,
                                
                                },
                                
                                
                        },
                        
                        highlight: function(element) {
                            $(element).parent().addClass('has-error');
                        },
                        unhighlight: function(element) {
                            $(element).parent().removeClass('has-error');
                        },
                        });
                        
                    });
             
                    $(document).on('submit','#updateclient',function(e){
                        e.preventDefault();
                            //var data = $(this).serialize();
                            if ($('#updateclient').valid()) {
                                $.ajax({
                                url:"{!! route('client.update') !!}",
                                method:"POST",
                                data:new FormData(this),
                                dataType:'JSON',
                                contentType: false,
                                cache: false,
                                processData: false,
                                success:function(data)
                                {
                                    //console.log(data);
                                    toastr.options = {
                                            "debug": false,
                                            "positionClass": "toast-bottom-right",
                                            "onclick": null,
                                            "fadeIn": 300,
                                            "fadeOut": 1000,
                                            "timeOut": 5000,
                                            "extendedTimeOut": 1000
                                        };
                                    toastr.success('Data Updated Successfully');
                                        $('.unqclient'+data.id).replaceWith(`<tr class='unqclient`+data.id+`'>
                                    <td>`+data.name+`</td>
                                    <td><img src="/`+data.image+`" width="150" height="70"></td>
                                    <td>`+data.url+`</td>
                                    <td>
                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#clientupdate" class="editclient"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                        <a class="deleteclient" data-id ="`+data.id+`" ><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                    </td>
                                    </tr>`);    
                                    setTimeout(function() {$('#clientupdate').modal('hide');}, 1500);
                        
                                    $('#updatclient').trigger('reset');
                                }
                                
                            });
                            }
                        
                    })
                    $(document).on('click','.deleteclient',function(e) {
                        e.preventDefault();
                        var id = $(this).data('id');
                        //alert(role);
                        Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        
                        }).then(result => {
                        
                        if (result.value) {
                            $.ajax({
                            url: "{!! route('client.delete') !!}",
                            type: "get", 
                            data: {  
                                id: id, 
                            },
                            success: function(data) {
                                }
                            });
                            
                            $(this).closest('tr').hide();
                            
                        }
                        }
                    )
                });
                </script>
            </div>
            <div id="tab4" class="tab-pane fade in">
                    <section class="content">
                       <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Our Expertise </h3>
                            </div>
                            {!!Form::open(['class' => 'form-horizontal','id'=>'expertise','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                               </div>
                            </div>
                            <div class="form-group">
                                <label for="link" class="col-sm-2 control-label">Icon </label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Ex: fa fa-email">
                                </div>
                              </div>
                            
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </section>
                     <section class="content">
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box box-info">
                                  <div class="box-header">
                                    <h3 class="box-title">Expertises </h3>
                                     <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                      </div>
                                     </div>
                                  <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped expertiseprepend">
                                      <thead>
                                      <tr>
                                        <th width="20%">Title</th>
                                        <th width="20%">Icon</th>
                                        <th width="15%">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody class="">
                                        @foreach($data['expertise'] as $expertise)
                                       <tr class='unqexpertise{{$expertise->id}}'>
                                           <td>{{$expertise->title}}</td>
                                           <td>{{$expertise->f_class}}</td>
                                            <td>
                                                <a data-id ="{{$expertise->id}}" data-toggle="modal" data-target="#expertiseupdate" class="editexpertise"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                <a class="deleteexpertise" data-id ="{{$expertise->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                            </td>
                                        </tr>
                                      @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div>
                              <!-- /.col -->
                            </div>
                        </section>
                        <div class="modal fade" id="expertiseupdate">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Client Info</h4>
                                    </div>
                                      <div class="modal-body">
                                          {!!Form::open(['class' => 'form-horizontal','id'=>'updateexpertise','enctype'=>'multipart/form-data'])!!}
                                          <div class="box-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="link" class="col-sm-2 control-label">Icon</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Ex: fa fa-email">
                                                    </div>
                                                    </div>
                                                
                                                </div>
                                          </div>
                                          <div class="box-footer">
                                              <button type="submit" class="btn btn-info">Update</button>
                                          </div>
                                          {!!Form::close()!!}
                                    </div>
                                  </div>
                               </div>
                        </div>
                <script>
                    $(document).ready(function () {
                        $('#expertise').validate({ 
                        rules: {
                                
                            title: 
                            {
                            required: true,
                            
                            },
                            icon: 
                            {
                            required: true,
                            
                            },
                    
                                
                                
                        },
                        
                        highlight: function(element) {
                            $(element).parent().addClass('has-error');
                        },
                        unhighlight: function(element) {
                            $(element).parent().removeClass('has-error');
                        },
                        });
                        
                    });
                    $('#expertise').on('submit',function(e){
                        e.preventDefault();
                        //var data = $(this).serialize();
                        var base_url = $('#client').find('#path').val();
                        if ($('#expertise').valid()) {
                            $.ajax({
                            url:"{{route('expertise.store')}}",
                            method:"POST",
                            data:new FormData(this),
                            dataType:'JSON',
                            contentType: false,
                            cache: false,
                            processData: false,
                            success:function(data)
                            {
                                //console.log(data);
                                toastr.options = {
                                        "debug": false,
                                        "positionClass": "toast-bottom-right",
                                        "onclick": null,
                                        "fadeIn": 300,
                                        "fadeOut": 1000,
                                        "timeOut": 5000,
                                        "extendedTimeOut": 1000
                                    };
                                toastr.success('Data Inserted Successfully');
                                $('.expertiseprepend').prepend(`<tr class='unqexpertise`+data.id+`'>
                                <td>`+data.title+`</td>
                                <td>`+data.f_class+`</td>
                                <td>
                                    <a data-id ="`+data.id+`" data-toggle="modal" data-target="#expertiseupdate" class="editexpertise"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                    <a class="deleteexpertise" data-id ="`+data.id+`" ><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                </td>
                                </tr>`);          
                                $('#expertise').trigger('reset');
                            }
                            
                        });
                        }
                    });
                    $(document).on('click','.editexpertise',function(){
                        var id = $(this).data('id');
                        var base_url = $('#client').find('#path').val();
                        $.ajax({
                        url: "{!! route('expertise.edit') !!}",
                        type: "get", 
                        data: {  
                            id: id, 
                        },
                        success: function(data) {
                          
                            $('#updateexpertise').find('#title').val(data.title);
                            $('#updateexpertise').find('#icon').val(data.f_class);
                            $('#updateexpertise').find('#id').val(data.id);
                         }
                        });
                    })
                    $(document).ready(function () {
                        $('#updateexpertise').validate({ 
                        rules: {
                                
                            title: 
                            {
                            required: true,
                            
                            },
                            icon: 
                            {
                            required: true,
                            
                            },
                                
                                
                        },
                        
                        highlight: function(element) {
                            $(element).parent().addClass('has-error');
                        },
                        unhighlight: function(element) {
                            $(element).parent().removeClass('has-error');
                        },
                        });
                        
                    });
             
                    $(document).on('submit','#updateexpertise',function(e){
                        e.preventDefault();
                            //var data = $(this).serialize();
                            if ($('#updateexpertise').valid()) {
                                $.ajax({
                                url:"{!! route('expertise.update') !!}",
                                method:"POST",
                                data:new FormData(this),
                                dataType:'JSON',
                                contentType: false,
                                cache: false,
                                processData: false,
                                success:function(data)
                                {
                                    //console.log(data);
                                    toastr.options = {
                                            "debug": false,
                                            "positionClass": "toast-bottom-right",
                                            "onclick": null,
                                            "fadeIn": 300,
                                            "fadeOut": 1000,
                                            "timeOut": 5000,
                                            "extendedTimeOut": 1000
                                        };
                                    toastr.success('Data Updated Successfully');
                                        $('.unqexpertise'+data.id).replaceWith(`<tr class='unqexpertise`+data.id+`'>
                                        <td>`+data.title+`</td>
                                        <td>`+data.f_class+`</td>
                                        <td>
                                            <a data-id ="`+data.id+`" data-toggle="modal" data-target="#expertiseupdate" class="editexpertise"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                            <a class="deleteexpertise" data-id ="`+data.id+`" ><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                        </td>
                                        </tr>`);    
                                    setTimeout(function() {$('#expertiseupdate').modal('hide');}, 1500);
                        
                                    $('#updateexpertise').trigger('reset');
                                }
                                
                            });
                            }
                        
                    })
                    $(document).on('click','.deleteexpertise',function(e) {
                        e.preventDefault();
                        var id = $(this).data('id');
                        //alert(role);
                        Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        
                        }).then(result => {
                        
                        if (result.value) {
                            $.ajax({
                            url: "{!! route('expertise.delete') !!}",
                            type: "get", 
                            data: {  
                                id: id, 
                            },
                            success: function(data) {
                                }
                            });
                            
                            $(this).closest('tr').hide();
                            
                        }
                        }
                    )
                });
                </script>
            </div>
            <div id="tab5" class="tab-pane fade in ">
                    <section class="content" id="videoref">
                    <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Video Url</h3>
                            
                            </div>
                            {!!Form::open(['class' => 'form-horizontal','id'=>'video','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Video Url</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="url" name="url" value="{{$data['video']->url}}">
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{$data['video']->id}}">
                                   </div>
                                </div>
                              
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </section>
                    <script>
                         $(document).ready(function () {
                            $('#video').validate({ 
                                rules: {
                                    url: 
                                    {
                                        required: true,
                                        
                                    },
                                    
                                    
                                },
                                
                                highlight: function(element) {
                                    $(element).parent().addClass('has-error');
                                },
                                unhighlight: function(element) {
                                    $(element).parent().removeClass('has-error');
                                },
                            });
                            });
                            $(document).on('submit','#video',function(e){
                                e.preventDefault();
                                //var data = $(this).serialize();
                                if ($('#video').valid()) {
                                $.ajax({
                                    url:"{!! route('video.store') !!}",
                                    method:"POST",
                                data:new FormData(this),
                                dataType:'JSON',
                                contentType: false,
                                cache: false,
                                processData: false,
                                    success:function(data)
                                    {
                                    //console.log(data);
                                    toastr.options = {
                                            "debug": false,
                                            "positionClass": "toast-bottom-right",
                                            "onclick": null,
                                            "fadeIn": 300,
                                            "fadeOut": 1000,
                                            "timeOut": 5000,
                                            "extendedTimeOut": 1000
                                            };
                                    toastr.success('Data Updated Successfully');
                                        
                            
                                    $("#videoref").load(location.href + " #videoref");
                                    }
                                    
                                });
                            }
                        })
               </script>
          </div>
        </div>
    </div>
</section>
@endsection