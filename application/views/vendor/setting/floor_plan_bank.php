<!-- Head Tag-->
	<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 




<!-- Style Tag-->
<style>


	.input-icons i { 
			position: absolute; 
		} 
		
		.input-icons { 
			width: 100%; 
			margin-bottom: 10px; 
		} 
		
		.icon { 
			padding: 10px; 
			color: green; 
			min-width: 50px; 
			text-align: center;
			margin-left:  -20px;
		} 



	 /* Real Code */ 


	.custom-file-input::-webkit-file-upload-button{
		visibility: hidden;
        width: 150px;
        display: inline-block;
		color: green;
		background: #ffffff;
		border-color: green;
	}
	.custom-file-input::before
	{
        
		content: 'Choose Floor Plan';
        display: inline-block;
        
        border: 1px solid #33be8b;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        font-weight: 400;
        background-color: #ffffff !important;
        color: #188c62 ;

	}
</style>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-left"><i class="fa fa-user" aria-hidden="true"></i>Floor Plan Bank<small>Add, Edit</small>
        </h1>   
     </section>



    <section class="content">

        <div class="box">

        	<!-- Header Content Starts-->
            <div class="box-body">
                <div class="row">

                    <!-- First Column Starts-->

                    <div class="col-sm-4">
                    	<h4><b>Floor Plan Bank</b></h4>    
                    </div>

                	<!-- Second column start-->

                    <div class="col-sm-3">
                        <!-- Normal Upload Button-->
                        <input type="file" class="custom-file-input" name="uploadLogo" multiple id="uploadLogo">
                    </div>

                    <!-- Third Column start-->

                    <div class="col-sm-5">
                    	<small>Press CTRL key while selecting floor plan to upload multiple floor plan at once</small>
                    </div>
                </div>


            <!-- Body Content Starts-->


            <div class="box-body">
            <div class="row">
                <div class="col-sm-12">                             
                    <div class="box-body">
                        <div class="form-group" style="margin-left: 300px;">
                            <div class="row">
                                <h3>Your Floor Plan Bank is empty</h3> 
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



               



            </div>
             
           
            
        </div>
    </section>
</div>
