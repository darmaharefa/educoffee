<div class="section-menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Main Menu Starts -->
        <nav id="main-menu" class="navbar navbar-default" role="navigation">
          <!-- Nav Header Starts -->
          <div class="container-fluid container-menu">
            <div class="navbar-header">
              <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- Nav Header Ends -->

            <!-- Navbar Cat collapse Starts -->
            <div class="collapse navbar-collapse navbar-cat-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Kopi</a>
                  <div class="dropdown-menu ">
                    <div class="dropdown-inner">
                       <div class="submenu">
                        <div class="row">
                          @foreach($categoriesKopi as $category)
                            <div class="col-sm-4 submenu-category">
                              <a href="{{ url('list-coffee/'.$category->id) }}">
                                <div class="media-fa">
                                      <div class="media-fa-left">
                                        <img src="{{ Voyager::image($category->image_url) }}" class="categories-thumb img-responsive" alt="Image">
                                      </div>
                                      <div class="submenu-label">{{ $category->name }}</div>
                                  </div>
                                </a>
                            </div>
                          @endforeach
                          {{-- <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-coffee"></i>
                                </div>
                                <div class="submenu-label">Kopi Luar</div>
                              </a>
                            </div>
                          </div>
                          <div class="col-sm-4 submenu-category">
                             <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-glass"></i>
                                </div>
                                <div class="submenu-label">Kopi Tengah</div>
                              </a>
                            </div>
                          </div>
                           <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-beer"></i>
                                </div>
                                <div class="submenu-label">Kopi Dalam</div>
                              </a>
                            </div>
                          </div>
                          <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-coffee"></i>
                                </div>
                                <div class="submenu-label">Kopi Luar</div>
                              </a>
                            </div>
                          </div>
                          <div class="col-sm-4 submenu-category">
                             <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-glass"></i>
                                </div>
                                <div class="submenu-label">Kopi Tengah</div>
                              </a>
                            </div>
                          </div>
                           <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-beer"></i>
                                </div>
                                <div class="submenu-label">Kopi Dalam</div>
                              </a>
                            </div>
                          </div> --}}
                         </div>
                       </div>
                    </div>
                  </div>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Mesin Kopi</a>
                   <div class="dropdown-menu ">
                    <div class="dropdown-inner">
                       <div class="submenu">
                        <div class="row">
                          <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-coffee"></i>
                                </div>
                                <div class="submenu-label">Mesin Kopi Luar</div>
                              </a>
                            </div>
                          </div>
                          <div class="col-sm-4 submenu-category">
                             <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-glass"></i>
                                </div>
                                <div class="submenu-label">Mesin Kopi Tengah</div>
                              </a>
                            </div>
                          </div>
                           <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-beer"></i>
                                </div>
                                <div class="submenu-label">Mesin Kopi Dalam</div>
                              </a>
                            </div>
                          </div>
                          <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-coffee"></i>
                                </div>
                                <div class="submenu-label">Mesin Kopi Luar</div>
                              </a>
                            </div>
                          </div>
                          <div class="col-sm-4 submenu-category">
                             <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-glass"></i>
                                </div>
                                <div class="submenu-label">Mesin Kopi Tengah</div>
                              </a>
                            </div>
                          </div>
                           <div class="col-sm-4 submenu-category">
                            <div class="media-fa">
                              <a href="">
                                <div class="media-fa-left">
                                  <i class="fa fa-beer"></i>
                                </div>
                                <div class="submenu-label">Mesin Kopi Dalam</div>
                              </a>
                            </div>
                          </div>
                         </div>
                       </div>
                    </div>
                  </div>
                </li>
                <li><a href="">Resep</a></li>
                <li><a href="/komparasi">Komparasi</a></li>
                <li><a href="">Panduan</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact Us</a></li>
              </ul>
            </div>
            <!-- Navbar Cat collapse Ends -->
          </div>
        </nav>
        <!-- Main Menu Ends -->
      </div>
    </div>
  </div>
</div>
