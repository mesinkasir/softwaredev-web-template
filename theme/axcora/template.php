<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>

<div class="col-12 col-md-12 p-3 p-md-5"><br/>
				<h1 class="text-center p-3"><strong><a class="text-dark" href="<?php get_page_url(); ?>"><?php get_page_title(); ?></a></strong></h1>
<nav class="text-white" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
				<ol class="breadcrumb bg-danger p-2 text-light">
			 <li class="breadcrumb-item">
				<a class="text-light" href="<?php get_site_url(); ?>">Home</a> </li>
				<li class="breadcrumb-item">
				<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b class="text-light"><?php get_page_clean_title(); ?></b>
				</li> 
				<li class="breadcrumb-item"><a class="text-light" href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a></li>
			</ol>
			</nav>
				<?php get_page_content(); ?>
				
</div>



<?php include('footer.inc.php'); ?>