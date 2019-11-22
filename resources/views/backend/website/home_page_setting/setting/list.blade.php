@extends('backend.layouts.master')
@section('page-title','Setting')
@section('page-content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">General Setting</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                        <li class="breadcrumb-item active">Setting</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped table-bordered">
                                
                                <thead class="thead-default">
                                    <tr>
                                        
                                        <th data-priority="0">Sl.</th>
                                        <th data-priority="1">Company name</th>
                                        <th data-priority="1">Company logo</th>
                                        <th data-priority="1">Slogan</th>
                                        <th data-priority="3">Address 1</th>
                                        <th data-priority="3">Address 2</th>
                                        <th data-priority="3">Phone 1</th>
                                        <th data-priority="3">Phone 2</th>
                                        <th data-priority="3">Facebook</th>
                                        <th data-priority="3">Twetter</th>
                                        <th data-priority="3">Linked In</th>
                                        <th data-priority="3">Skype</th>
                                        <th data-priority="3">Youtube </th>
                                        <th data-priority="1">Date</th>
                                        <th data-priority="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                    @foreach($settings as $setting)
                                    <?php $i++; ?>
                                    <tr>
                                        
                                        <td>{{$i}}</td>
                                        <td>{{$setting->company_name}}</td>
                                        <td> 
                                            <?php echo "<img src='".asset($setting->image)."' alt='' style='height: 80px;width: 80px;'>"; ?>
                                            
                                        </td>
                                       <td>{{$setting->company_slogan}}</td>
                                       <td>{{$setting->company_address1}}</td>
                                       <td>{{$setting->company_address2}}</td>
                                       <td>{{$setting->company_phone1}}</td>
                                       <td>{{$setting->company_phone2}}</td>
                                       <td>{{$setting->company_fb}}</td>
                                       <td>{{$setting->company_twitter}}</td>
                                       <td>{{$setting->company_linkendin}}</td>
                                       <td>{{$setting->company_skype}}</td>
                                       <td>{{$setting->company_youtube}}</td>
                                       
                                        
                                     
                                        
                                        <td>{{$setting->created_at}}</td>
                                        
                                        <td>
                                            <a href="{{route('website_setting.edit',$setting->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        </div> <!-- container -->
        </div> <!-- content -->
        <script>
        function deleteconfirm()
        {
        deletedata = confirm("Are you sure to delete permanently?");
        if (deletedata != true)
        {
        return false;
        }
        }
        </script>
        @endsection