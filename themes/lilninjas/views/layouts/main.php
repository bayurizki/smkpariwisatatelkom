<!doctype html>
<html lang="id">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta name="description" content="SMK Pariwisata Telkom Bandung berada dibawah naungan Telkom Schools. Telkom Schools adalah 'brand' atau label yang diproklamirkan pada Januari 2014 bagi sekolah-sekolah berkualitas, non-perguruan-tinggi, di lingkungan keluarga besar PT Telkom.">
        <meta name="google-site-verification" content="bBqHsPYSxBpS1gpwjAKS7KtunXZKT0jr9ipVj7gIT3E" />
        <meta name="keywords" content="SMK Pariwisata, SMK Telkom, SMK Pariwisata Telkom Bandung">
	<title><?php echo CHtml::encode( Yii::app()->name ) ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/TELKOM16.png" type="image/x-icon" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<?php
	$results = Kalender::model()->findAllBySql("select * from kalender order by id desc limit 4");
	$y = Youtube::model()->findByPk($id=1);

?>
<body>
<div id="wrapper"><!-- #wrapper -->
	<div class="content">
			<div class="simple-marquee-container">
				<div class="marquee-sibling">
					Informasi Terbaru:
				</div>
				<div class="marquee-login">
		                    <?php
		                        if (Yii::app()->user->getLevel() == '100'){
		                            echo CHtml::link('Login',array('site/login'));
		                        } else{
		                            echo CHtml::link('Logout',array('site/logout'));
		                        }
		                    ?>
		                </div>
				<div class="marquee">
					<ul class="marquee-content-items">
                                            <?php foreach ($results as $key) { ?>
						<li><?php echo $key->tgl.' - '.$key->kegiatan; ?></li>
					    <?php
                                        	}
                                            ?>
                                        </ul>
				</div>
			</div>
	</div>

	<header><!-- header 
		<h1><a href="#">Header</a></h1> -->
		<h2><?php // echo CHtml::encode( Yii::app()->name ) ?></h2>
	</header><!-- end of header -->
	
		<div >
            <?php $this->widget('ext.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Tentang Kami',
                  'items'=>array(
                    array('label'=>'Profil', 'url'=>array('/akademik/profil')),
                    array('label'=>'Visi Misi', 'url'=>array('/Akademik/visimisi')),
                    array('label'=>'Kontak', 'url'=>array('/Akademik/kontak')),
                    array('label'=>'Fasilitas', 'url'=>array('/akademik/Fasilitas')),
                    array('label'=>'Gallery', 'url'=>array('/Akademik/Gallery')),
                  ),
                ),
                array('label'=>'Program Keahlian',
                  'items'=>array(
                    array('label'=>'Usaha Perjalanan Wisata', 'url'=>array('/akademik/wisata')),
                    array('label'=>'Akomodasi Perhotelan', 'url'=>array('/akademik/hotel')),
                    array('label'=>'Jasa Boga', 'url'=>array('/akademik/jasaboga')),
                  ),
                ),
                array('label'=>'Akademik',
                  'items'=>array(
                    array('label'=>'Info Akademik', 'url'=>array('/akademik/info')),
                    array('label'=>'Kalender Akademik', 'url'=>array('/Kalender/Akademik')),
                    array('label'=>'Materi Pembelajaran',
                      'items'=>array(
                        array('label'=>'Materi', 'url'=>array('/Materi/cari')),
                        array('label'=>'Tugas', 'url'=>array('/tugas/cari')),
                      ),
                    ),
               	    array('label'=>'Jadwal Pelajaran', 'url'=>array('/Jadwal/cari')),
                  ),
                ),
                array('label'=>'Kesiswaan',
                  'items'=>array(
                    array('label'=>'Ekstrakulikuler', 'url'=>array('/akademik/ekskul')),
                    array('label'=>'Form Alumni', 'url'=>array('/akademik/alumni')),
                    array('label'=>'Prestasi', 'url'=>array('/akademik/prestasi')),
                    array('label'=>'Kuisioner', 'url'=>array('/akademik/kuisioner')),
                  ),
                ),
                array('label'=>'Hubin',
                  'items'=>array(
                    array('label'=>'Kemitraan', 'url'=>array('/akademik/Kemitraan')),
                    array('label'=>'Beasiswa', 'url'=>array('/akademik/beasiswa')),
                    array('label'=>'Promosi', 'url'=>array('/akademik/promosi')),
                    array('label'=>'Prakerin', 'url'=>array('/akademik/prakerin')),
                    array('label'=>'Bursa Tenaga Kerja', 'url'=>array('btk/')),
                  ),
                ),
                array('label'=>'PPDB', 'url'=>array('/akademik/ppdb')),
                array('label'=>'download', 'url'=>array('/download/')),
                
            ),
    )); ?>
	</div>
	
	<?php if (Yii::app()->user->getLevel() == '100'){ ?>
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
            <article>
                <?php echo $content; ?>
                
            </article>	
			</section><!-- end of #content -->

		<aside id="sidebar"><!-- sidebar -->
		    <?php $this->widget('KeywordSearchComponent'); ?> <br />
                   <iframe src="http://www.republika.co.id/jadwal-sholat/" scrolling="no" width="100%" height="250" frameborder="no" framespacing="0"></iframe>
                   <h3 style="padding-left: 15px; padding-top:15px;" > YOUTUBE </a> </h3>
		   <ul>
		     <iframe width="300" height="200" src="<?php echo $y->link;?>" frameborder="0" allowfullscreen style="padding-top:-1px;"></iframe>
		   </ul>
		   
		   <a class="twitter-timeline" href="https://twitter.com/smkpartelbdg">Tweets by smkpartelbdg</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

		   <h3> <a href="https://www.instagram.com/infosmkpartelbdg/" style="padding-left: 15px;" target="_blank"> INSTAGRAM </a> </h3>
		   <iframe src="//widgets-code.websta.me/w/cae3c0d4fe81?ck=MjAxNi0xMS0xM1QxMjo1OToyNC4wMDBa" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:auto;height:520px;width:300px;"></iframe>
                   <ul>
                     <a href="http://s11.flagcounter.com/more/BMr"><img src="http://s11.flagcounter.com/count2/BMr/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                   </ul>
					
		</aside><!-- end of sidebar -->
	</section><!-- end of #main content and sidebar-->

	
	<?php }if (Yii::app()->user->getLevel() == '1'){ ?>
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
            <article>
                <p> <marquee> Anda memasuki halaman administrator </marquee> </p>
                <?php echo $content; ?>
            </article>	
			</section><!-- end of #content -->

		<aside id="sidebar"><!-- sidebar -->
		 <h3>Berita</h3>
		     <ul class="main">
			 <li><?php echo CHtml::link('Buat Berita',array('Berita/create'));?></li>
			 <li><?php echo CHtml::link('Kelola Berita',array('Berita/admin'));?></li>	
	              </ul><br />

		 <h3>Bursa Tenaga Kerja</h3>
		     <ul class="main">
			 <li><?php echo CHtml::link('Buat Lowongan',array('Btk/create'));?></li>
			 <li><?php echo CHtml::link('Kelola Lowongan',array('Btk/admin'));?></li>	
		     </ul><br />
		     
		 <h3>Hubin</h3>
                    <ul class="main">
                        <li><?php echo CHtml::link('Kemitraan',array('kemitraan/admin'));?></li>
                        <li><?php echo CHtml::link('Beasiswa',array('beasiswa/admin'));?></li>
                        <li><?php echo CHtml::link('Prakerin',array('prakerin/admin'));?></li>
                        <li><?php echo CHtml::link('Promosi',array('promosi/admin'));?></li>

                    </ul>
                    <br />

		 <h3>Data Master</h3>
		     <ul class="main">
			 <li><?php echo CHtml::link('Kelola Kelas',array('Kelas/admin'));?></li>
			 <li><?php echo CHtml::link('Kelola Mata Pelajaran',array('MataPelajaran/admin'));?></li>
			 <li><?php echo CHtml::link('Kelola Jadwal',array('Jadwal/admin'));?></li>
			 <li><?php echo CHtml::link('Kelola User',array('User/admin'));?></li>
		     </ul>

                <h3>Setting</h3>
                    <ul class="main">
                        <li><?php echo CHtml::link('Setting Informasi',array('kalender/admin'));?></li>
                        <li><?php echo CHtml::link('Setting Gambar Slider',array('imageSlider/admin'));?></li>
                        <li><?php echo CHtml::link('Ubah Link Youtube',array('youtube/admin'));?></li>  
                        <li><?php echo CHtml::link('Setting File Download',array('download/admin'));?></li>
                        <li><?php echo CHtml::link('Backup Database',array('backup/'));?></li>   
                    </ul>
                    <br />
					
		</aside><!-- end of sidebar -->

	<?php } if(Yii::app()->user->getLevel()=='2') {?>
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
            <article>
                
                <?php echo $content; ?>
            </article>	
			</section><!-- end of #content -->

		<aside id="sidebar"><!-- sidebar -->
				<h3>Materi</h3>
					<ul class="main">
						<li><?php echo CHtml::link('Tambahkan Materi',array('Materi/create'));?></li>
						<li><?php echo CHtml::link('Kelola Materi',array('Materi/admin'));?></li>	
					</ul>
					<br />
				<h3>Tugas</h3>
					<ul class="main">
						<li><?php echo CHtml::link('Tambahkan Tugas',array('tugas/create'));?></li>
						<li><?php echo CHtml::link('Kelola Tugas',array('tugas/admin'));?></li>	
					</ul>
					<br />
		</aside><!-- end of sidebar -->
	<?php } ?>
	
		<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
                        <aside class="footer-segment">
                         <ul>
                            <h4> HUBUNGI KAMI </h4>
                            <p> SMK Pariwisata Telkom Bandung <br /> 
                            	Jl. Palasari  No. 1  RT.05 RW.06
                                Kelurahan Lingkar Selatan
                                Kecamatan Lengkong
                                Kota Bandung  40263
                                Telp. 022-7301568 
                                Fax. 022-7319875
                                smkpariwisatatelkom@gmail.com  </p>
                             <div class="social"> 
                             <a href="https://plus.google.com/u/0/104651098837542079169" target="_blank">
                                <img src="<?php echo Yii::app()->request->baseUrl."/images/icon/google.png"?>" alt="SMK Pariwisata Telkom Bandung">
                            </a>
                            <a href="https://www.facebook.com/SMK-Pariwisata-Telkom-Bandung-157008744364477/?ref=nf" target="_blank">
                                <img src="<?php echo Yii::app()->request->baseUrl."/images/icon/facebook.png"?>" alt="Facebook SMK Pariwisata Telkom Bandung">
                            </a>
                            <a href="https://twitter.com/smkpartelbdg" target="_blank">
                                <img src="<?php echo Yii::app()->request->baseUrl."/images/icon/twitter.png"?>" alt="Twitter SMK Pariwisata Telkom Bandung">
                            </a>
                            <a href="https://www.instagram.com/infosmkpartelbdg/" target="_blank">
                                <img src="<?php echo Yii::app()->request->baseUrl."/images/icon/instagram.png"?>" alt="Instagram SMK Pariwisata Telkom Bandung">
                            </a>
                            <a href="https://www.youtube.com/channel/UCX2yIqYKP5P0B5L-t-yFopg" target="_blank">
                                <img src="<?php echo Yii::app()->request->baseUrl."/images/icon/youtube.png"?>" alt="Youtube SMK Pariwisata Telkom Bandung">
                            </a>
                             </div> 
                         </ul>
                         
                        </aside>
                        

                    
                        <aside class="footer-segment">
					<ul>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.706004533492!2d107.62195641436728!3d-6.925703194996025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d505934a4b%3A0x3c7fa758464adacd!2sSMK+Pariwisata+Telkom!5e0!3m2!1sen!2sid!4v1477110378757" width="330" height="200" frameborder="0" style="border:0; padding-left:220px; padding-top:2px;"  allowfullscreen></iframe>
					</ul>
			 </aside><!-- end of #first footer segment -->
			</section><!-- end of footer-outer-block -->

		</section><!-- end of footer-area -->
	</footer>
	
</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>

<script type="text/javascript">
	;(function ($, window, document, undefined){
	var pluginName = 'SimpleMarquee';

    function Plugin (element, options) {
        this.element = element;
        this._name = pluginName;
        this._defaults = $.fn.SimpleMarquee.defaults;
        this.settings = $.extend( {}, this._defaults, options );
        this.marqueeSpawned = [];
        this.marqueeHovered = false;
        this.documentHasFocus = false;        
        //
        this.counter = 0;

        this.timeLeft = 0;
        this.currentPos = 0;
        this.distanceLeft = 0;
        this.totalDistance = 0;
        this.contentWidth = 0;
        this.endPoint = 0;
        this.duration = 0;
        this.hovered = false;
        this.padding = 0;
        
        
        this.init();
    }
    function marqueeObj(newElement){
    	this.el=newElement;
    	this.counter=0;
    	this.name="";
    	this.timeTop=0;
    	this.currentPos=0;
    	this.distanceTop=0;
    	this.totalDistance=0;
    	this.contentWidth=0;
    	this.endPoint=0;
    	this.duration=0;
    	this.hovered=false;
    	this.padding=0;
    }
    //methods for plugin
    $.extend(Plugin.prototype, {

        // Initialization logic
        init: function () {
            this.buildCache();
            this.bindEvents();
            var config = this.settings;
            //init marquee
            if($(config.marquee_class).width() == 0){
	            console.error('FATAL: marquee css or children css not correct. Width is either set to 0 or the element is collapsing. Make sure overflow is set on the marquee, and the children are postitioned relatively');
	            return;
	        }
	
	        if(typeof $(config.marquee_class) === 'undefined'){
	            console.error('FATAL: marquee class not valid');
	            return;
	        }
	
	        if(typeof $(config.container_class) === 'undefined'){
	            console.error('FATAL: marquee container class not valid');
	            return;
	        }
	
	        if(config.sibling_class != 0 && typeof $(config.sibling_class) === 'undefined'){
	            console.error('FATAL: sibling class container class not valid');
	            return;
	        }
	        
	        //create the Marquee
	        this.createMarquee();
        },

        // Remove plugin instance completely
        destroy: function() {
            this.unbindEvents();
            this.$element.removeData();
        },

        // Cache DOM nodes for performance
        buildCache: function () {
            this.$element = $(this.element);
        },

        // Bind events that trigger methods
        bindEvents: function() {
        	var plugin = this;
        	$(window).on('focus',function(){
        		plugin.documentHasFocus = true;
        		for (var key in plugin.marqueeSpawned){
      	          plugin.marqueeManager(plugin.marqueeSpawned[key]);   
      	      	} 
        	});
        	$(window).on('blur',function(){
        		plugin.documentHasFocus = false;
        		for (var key in plugin.marqueeSpawned){
        	        plugin.marqueeSpawned[key].el.clearQueue().stop(); 
        	        plugin.marqueeSpawned[key].hovered = true;
        	    }
        	});

        },

        // Unbind events that trigger methods
        unbindEvents: function() {
        	$(window).off('blur focus');
        },
        getPosition: function(elName){
        	this.currentPos = parseInt($(elName).css('left'));
            return this.currentPos;
        },
        createMarquee: function(){
        	var plugin = this;
        	var config = plugin.settings;
        	var marqueeContent =  $(config.marquee_class).html();
            var containerWidth = $(config.container_class).width();
            var contentWidth = $(config.marquee_class).width();
            
            var widthToIgnore = 0;
            if (config.sibling_class != 0){ 
            	widthToIgnore = $(config.sibling_class).width();
            } 
            
            var spawnAmount = Math.ceil(containerWidth / contentWidth);
            
            $(config.marquee_class).remove();

            if(spawnAmount<=2){
                spawnAmount = 3;
            } else {
              spawnAmount++;
            }

            var totalContentWidth = (contentWidth + config.padding)*spawnAmount;

            var endPoint = -(totalContentWidth - containerWidth);

            var totalDistance =  containerWidth - endPoint;
            
            
            
            
            for (var i = 0; i < spawnAmount; i++) {
            	
            	var newElement = false;
            	
                if(config.hover == true){

                  
                  newElement = $('<div class="marquee-' + (i+1) + '">' + marqueeContent + '</div>')        
                  .mouseenter(function() {


                    if ((plugin.documentHasFocus == true) && (plugin.marqueeHovered == false)){
                      plugin.marqueeHovered = true;

                      for (var key in plugin.marqueeSpawned){
                        plugin.marqueeSpawned[key].el.clearQueue().stop(); 
                        plugin.marqueeSpawned[key].hovered = true;
                      }
                      

                    }

                  })
                  .mouseleave(function() {


                      if ((plugin.documentHasFocus == true) && (plugin.marqueeHovered == true)){

                        for (var key in plugin.marqueeSpawned){
                          plugin.marqueeManager(plugin.marqueeSpawned[key]);   
                        } 

                        plugin.marqueeHovered = false;
                      } 
                  });

                } else {

                  newElement = $('<div class="marquee-' + (i+1) + '">' + marqueeContent + '</div>') ;   

                }

                plugin.marqueeSpawned[i] = new marqueeObj(newElement);

                $(config.container_class).append(newElement);

                plugin.marqueeSpawned[i].currentPos = (widthToIgnore + (contentWidth*i))+(config.padding*i);  //initial positioning
                plugin.marqueeSpawned[i].name = '.marquee-'+(i+1); 

                plugin.marqueeSpawned[i].totalDistance = totalDistance;  
                plugin.marqueeSpawned[i].containerWidth = containerWidth;  
                plugin.marqueeSpawned[i].contentWidth = contentWidth;  
                plugin.marqueeSpawned[i].endPoint = endPoint;  
                plugin.marqueeSpawned[i].duration = config.duration;  
                plugin.marqueeSpawned[i].padding = config.padding;  

                plugin.marqueeSpawned[i].el.css('left', plugin.marqueeSpawned[i].currentPos+config.padding +'px'); //setting left according to postition

                 if (plugin.documentHasFocus == true){
                  plugin.marqueeManager(plugin.marqueeSpawned[i]);
                }

            }
            //end for
            
            if(document.hasFocus()){
	        	 plugin.documentHasFocus = true;
        	}else{
	        	plugin.documentHasFocus = false;
	        }
            
        },
        marqueeManager: function(marqueed_el){
        	var plugin = this;
        	var elName = marqueed_el.name;
        	if (marqueed_el.hovered == false) { 

                if (marqueed_el.counter > 0) {  //this is not the first loop
                  
                      marqueed_el.timeLeft = marqueed_el.duration;
                      marqueed_el.el.css('left', marqueed_el.containerWidth +'px'); //setting margin 
                      marqueed_el.currentPos = marqueed_el.containerWidth; 
                      marqueed_el.distanceLeft = marqueed_el.totalDistance - (marqueed_el.containerWidth - plugin.getPosition(elName));

                } else {    // this is the first loop
                  
                  marqueed_el.timeLeft = (((marqueed_el.totalDistance - (marqueed_el.containerWidth - plugin.getPosition(elName)))/ marqueed_el.totalDistance)) * marqueed_el.duration;
                }

            } else {
                  marqueed_el.hovered = false;
                  marqueed_el.currentPos = parseInt(marqueed_el.el.css('left'));
                  marqueed_el.distanceLeft = marqueed_el.totalDistance - (marqueed_el.containerWidth - plugin.getPosition(elName));
                  marqueed_el.timeLeft = (((marqueed_el.totalDistance - (marqueed_el.containerWidth - marqueed_el.currentPos))/ marqueed_el.totalDistance)) * marqueed_el.duration;
            }

        	plugin.marqueeAnim(marqueed_el);
        },
        marqueeAnim: function(marqueeObject){
        	var plugin = this;
        	marqueeObject.counter++;
            marqueeObject.el.clearQueue().animate(
            		{'left': marqueeObject.endPoint+'px'}, 
            		marqueeObject.timeLeft, 
            		'linear', 
            		function(){
            			plugin.marqueeManager(marqueeObject);
        			});
        },
        callback: function() {
            // Cache onComplete option
            var onComplete = this.settings.onComplete;

            if ( typeof onComplete === 'function' ) {
                onComplete.call(this.element);
            }
        }

    });
    //end methods for plugin
    
    $.fn.SimpleMarquee = function (options) {
        this.each(function() {
            if ( !$.data( this, "plugin_" + pluginName ) ) {
                $.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
            }
        });
        return this;
    };
    $.fn.SimpleMarquee.defaults = {
            property: 'value',
            onComplete: null,
            duration: 90000,
            padding: 10,
            marquee_class: '.marquee',
            container_class: '.simple-marquee-container',
            sibling_class: 0,
            hover: true
    };
    
})( jQuery, window, document );
</script>


<script>
	$(function (){
		$('.simple-marquee-container').SimpleMarquee();				
	});
</script>

