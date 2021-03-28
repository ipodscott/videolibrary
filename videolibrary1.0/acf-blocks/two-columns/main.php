<?php
/**
 * Block Name: Multi Column Box
 *
 * This is the template that displays two multiwidth columns.
 */


// create id attribute for specific styling
$id = $block['id'];


?>

<?php $selectWidth = get_field('width'); if($selectWidth == 'half'){ ?>
	<?php $left_class = "half"; ?>
	<?php $right_class = "half"; ?>
<?php }else if ($selectWidth == "sixty_forty"){ ?>
 	<?php $left_class = "sixty"; ?>
	<?php $right_class = "forty"; ?>
<?php }else if ($selectWidth == "forty_sixty"){ ?>
 	<?php $left_class = "forty"; ?>
	<?php $right_class = "sixty"; ?>
<?php }else if ($selectWidth == "seventy_thirty"){ ?>
 	<?php $left_class = "seventy"; ?>
	<?php $right_class = "thirty"; ?>
<?php }else if ($selectWidth == "thirty_seventy"){ ?>
 	<?php $left_class = "thirty"; ?>
	<?php $right_class = "seventy"; ?>
<?php }else if ($selectWidth == "quarter_three"){ ?>
 	<?php $left_class = "three_quarter"; ?>
	<?php $right_class = "quarter"; ?>
<?php }else if ($selectWidth == "three_quarter"){ ?>
 	<?php $left_class = "quarter"; ?>
	<?php $right_class = "three_quarter"; ?>	

<?php }else{ ?>
  
<?php } ?>

<div class="column-container" style="padding-bottom:<?php the_field('padding_bottom');?>px; padding-top: <?php the_field('padding_top');?>px;">
	
	<div class="column-box">
		
		<div class="half-block left <?php echo($left_class);?>">
			
			<?php while(has_sub_field("content_selector")): ?>
	
	<?php if(get_row_layout() == "copy"):?>
					
		<?php the_sub_field('copy');?>
		
	<?php elseif(get_row_layout() == "image"):?>
						
		<?php elseif(get_row_layout() == "video"):?>
										
<?php endif; ?>
<?php endwhile; ?>
			
		</div>
		
		<div class="half-block right <?php echo($right_class);?>">
			
			<?php while(has_sub_field("content_selector")): ?>
	
	<?php if(get_row_layout() == "copy"):?>
					
		<?php the_sub_field('copy');?>
		
	<?php elseif(get_row_layout() == "image"):?>
						
		<?php elseif(get_row_layout() == "video"):?>
										
<?php endif; ?>
<?php endwhile; ?>
				
		</div>
		
	
	</div>
	
</div>