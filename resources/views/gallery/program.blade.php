@extends('master.master')
@section('title', 'Gallery')
@section('script')
<link rel="stylesheet" type="text/css" href="{!!asset('/css/gallery.css')!!}">
<link rel="stylesheet" href="{!! asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}">
@section('content')
<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			  <script>
				
				var imagePath=["https://lh3.googleusercontent.com/-rqVOba9RdcI/ViTxg6WF_KI/AAAAAAAAADI/R4pmOTKASCk/s144-Ic42/p1.jpg","https://lh3.googleusercontent.com/-hpLId9Sxcm0/ViTxg1MvRHI/AAAAAAAAADE/1b-jBfa1nUk/s144-Ic42/p2.jpg","https://lh3.googleusercontent.com/-gzC4HTyXC-s/ViTxhcWGxVI/AAAAAAAAADQ/_LA6WVNCojc/s144-Ic42/p3.jpg","https://lh3.googleusercontent.com/-T_HnOKd1CV0/ViTxgStr_VI/AAAAAAAAADA/bxWD6vlF-EI/s144-Ic42/p.jpg"];
				var index=0;
					function next()
					{
					index=index+1;
					if(index>3)
						{
						index=0;
						}
				
					var imgTag=document.getElementById("img1");
					imgTag.src=imagePath[index];
					var imgTag=document.getElementById("img2");
					imgTag.src=imagePath[index];
					
					var imgTag=document.getElementById("img3");
					imgTag.src=imagePath[index];
					var imgTag=document.getElementById("img4");
					imgTag.src=imagePath[index];
					
					
					}
					
					function previous()
					{
					index=index-1;
					if(index<0)
						{
						index=3;
						}
				
					var imgTag=document.getElementById("img1");
					imgTag.src=imagePath[index];
					var imgTag=document.getElementById("img2");
					imgTag.src=imagePath[index];
					
					var imgTag=document.getElementById("img2");
					imgTag.src=imagePath[index];
					var imgTag=document.getElementById("img3");
					imgTag.src=imagePath[index];
					
					
					}
					
			</script>
				<link rel='stylesheet' href='css/about.css'>
				<style>
					p { margin: 0 0 15px 0; }
					.sidebar-box { 
						float: left; 
						width: 250px;
						margin: 0 20px 0 0;
					}
					.sidebar-box {
						max-height: 350px;
						position: relative;
						padding: 20px;
						overflow: hidden;
					}
					.sidebar-box .read-more { 
						position: absolute; 
						bottom: 0; left: 0;
						width: 100%; 
						text-align: center; 
						margin: 0; 
						padding: 30px 0 30px 0; 
						
						/* "transparent" only works here because == rgba(0,0,0,0) */ 
						background-image: -moz-linear-gradient(top, transparent, black);
							background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, transparent),color-stop(1, white));
					}
					.gray {
						background-color: #80CBC4;
					}
					.red {
						background-color: #CCFF90;
					}
					.gra {
						background-color: #E1BEE7;
					}
					
					.gr {
						background-color: #F8BBD0;
					}
					
					
					.red .read-more { 
						/* transparent doesn't work in this context, must use RGBa for both */
						background-image: -moz-linear-gradient(top, rgba(255,0,0,0), rgba(255,0,0,100));
						background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, rgba(255,0,0,0)),color-stop(1, white));
					}
					.justify{
							text-align:justify;
							text-justify:inter-word;
							}	
				</style>
    <div class="container">
		
  
  <a href="{!! URL::to('/gallery') !!}">
                        <i class="fa fa-chevron-left"></i> <span>Back to albums</span> 
                    </a>

        <center><u><h3>PROGRAM GALLERY OF BARD </h3></u></center>
		
            <div class="row">

                    <div class="col-md-5">
                        <div class="gallery_gellary">
                            <div class=" gallery_image">
                                
							
                            	
							<a data-toggle="modal" data-target="#myModal16"><img src="https://lh3.googleusercontent.com/-T_HnOKd1CV0/ViTxgStr_VI/AAAAAAAAADA/bxWD6vlF-EI/s144-Ic42/p.jpg"/></a>
						
                            </div>
                             
                        </div>
						

						  <!-- Modal -->
						<div class="modal fade" id="myModal16" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
								
									<div class="modal-body">
								
										<img src="https://lh3.googleusercontent.com/-T_HnOKd1CV0/ViTxgStr_VI/AAAAAAAAADA/bxWD6vlF-EI/s144-Ic42/p.jpg" id="img1" height="70%" width="100%" />
												
										<button class="btn btn-success" OnClick="previous()"><i class="fa fa-chevron-left"></i></button>
										<button class="btn btn-primary" OnClick="next()"><i class="fa fa-chevron-right"></i></button>
										</div>
									<div class="modal-footer">
										  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								
							<a data-toggle="modal" data-target="#myModal17"><img src="https://lh3.googleusercontent.com/-rqVOba9RdcI/ViTxg6WF_KI/AAAAAAAAADI/R4pmOTKASCk/s144-Ic42/p1.jpg"/></a>
						
                            </div>
                             
                        </div>
						

						  <!-- Modal -->
						<div class="modal fade" id="myModal17" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
								
									<div class="modal-body">
								
										<img src="https://lh3.googleusercontent.com/-rqVOba9RdcI/ViTxg6WF_KI/AAAAAAAAADI/R4pmOTKASCk/s144-Ic42/p1.jpg" id="img2" height="70%" width="100%" />
												
										<button class="btn btn-success" OnClick="previous()"><i class="fa fa-chevron-left"></i></button>
										<button class="btn btn-primary" OnClick="next()"><i class="fa fa-chevron-right"></i></button>
										</div>
									<div class="modal-footer">
										  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								
							<a data-toggle="modal" data-target="#myModal18"><img src="https://lh3.googleusercontent.com/-hpLId9Sxcm0/ViTxg1MvRHI/AAAAAAAAADE/1b-jBfa1nUk/s144-Ic42/p2.jpg" /></a>
						
                            </div>
                             
                        </div>
						

						  <!-- Modal -->
						<div class="modal fade" id="myModal18" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
								
									<div class="modal-body">
								
										<img src="https://lh3.googleusercontent.com/-hpLId9Sxcm0/ViTxg1MvRHI/AAAAAAAAADE/1b-jBfa1nUk/s144-Ic42/p2.jpg" id="img3" height="70%" width="100%" />
												
										<button class="btn btn-success" OnClick="previous()"><i class="fa fa-chevron-left"></i></button>
										<button class="btn btn-primary" OnClick="next()"><i class="fa fa-chevron-right"></i></button>
										</div>
									<div class="modal-footer">
										  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
                            	
							<a data-toggle="modal" data-target="#myModal19"><img src="https://lh3.googleusercontent.com/-gzC4HTyXC-s/ViTxhcWGxVI/AAAAAAAAADQ/_LA6WVNCojc/s144-Ic42/p3.jpg" /></a>
						
                            </div>
                             
                        </div>
						

						  <!-- Modal -->
						<div class="modal fade" id="myModal19" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
								
									<div class="modal-body">
								
										<img src="https://lh3.googleusercontent.com/-gzC4HTyXC-s/ViTxhcWGxVI/AAAAAAAAADQ/_LA6WVNCojc/s144-Ic42/p3.jpg" id="img4" height="70%" width="100%" />
												
										<button class="btn btn-success" OnClick="previous()"><i class="fa fa-chevron-left"></i></button>
										<button class="btn btn-primary" OnClick="next()"><i class="fa fa-chevron-right"></i></button>
										</div>
									<div class="modal-footer">
										  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
                    </div>
            </div>


    </div>

@endsection