<div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
          <?php
            $category = DB::table('product_categories')->where(['parent_id' => 0])->get();
            
          foreach($category as $cat){
            $sub_category = DB::table('product_categories')->where(['parent_id' => $cat->id])->get();
          ?>
          <ul class='nav'>
              <li class='dropdown menu-item'> <a href='{{url("category",$cat->id)}}'  class='dropdown-toggle' data-toggle='<?php if(count($sub_category)){?>dropdown<?php } ?>'><i class='icon fa fa-shopping-bag' aria-hidden='true'></i>{{ $cat->category_name}}</a>
              <?php
              
                if(count($sub_category)){
                  ?>
                <ul class='dropdown-menu mega-menu'>
                  <li class='yamm-content'>
                    <div class='row'>
                      <?php foreach ($sub_category as  $sub_cat) { ?>
                      <div class='col-sm-12 col-md-3'>
                        <ul class='links list-unstyled'>
                        
                            <li><a href='{{url("category",$sub_cat->id)}}'>{{ $sub_cat->category_name}}</a></li>
                        
                       
                        </ul>
                      </div>
                      <?php } ?>
                    </div>
                   
                  </li>
                  <?php 
                    }
                  ?>
                </ul>
                </li>
            </ul>
          <?php } ?>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 