<?php 
	$itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title')));
    $itemDesc  = metadata('item', array('Dublin Core', 'Description'));
	if ($itemTitle == '') {
	    $itemTitle = __('[Untitled]');
	}

	$item = get_current_record('item');
	$collection_id = $item->collection_id;
	$collection = get_record_by_id('Collection', $collection_id);
	$collectionTitleElement = $collection->getElementTexts('Dublin Core', 'Title');
	$collectionTitle = $collectionTitleElement[0];
	$title = $collectionTitle . ' | ' . $itemTitle;	
	
    $itemDate = strip_formatting(metadata('item', array('Dublin Core', 'Date')));
	$itemCreator= strip_formatting(metadata('item', array('Dublin Core', 'Creator')));
	$itemLoc = strip_formatting(metadata('item', array('Item Type Metadata', 'Location')));

	
	
    echo head(array('title' => $title, 'bodyclass' => 'items show'));
    echo $this->partial('common/redirect.php');

?>

<style>
	
	.collectionTitle h1, div.collectionDesc {
			margin-top:20px;
	}

@media (max-width: 767px) {
	.main {
	padding-left: 0;
	}
	div.collectionTitle {
	width:100%;

	padding-left:15px;
	}
	.collectionTitle h1 {
	text-align:left;

	}
	div.collectionDesc {
		margin-top:0;
		padding-right:10px;

	}
}
</style>

<div class="section-title">    
	<div class="row">
		<div class="collectionTitleToItem">
			<h1>
				<!-- If the item belongs to a collection, the following creates a link to that collection. -->
	            <?php if (metadata('item', 'Collection Name')): ?>
	                   <?php echo link_to_collection_for_item() . ' > '; 
		               endif;
		               echo '<strong>' . $itemTitle . '</strong>';
		               ?>
			</h1>
		</div>
	</div>
	<div class="header-gradient">
		<div class="collectionTitle">
		     <h1><?php echo $itemTitle; ?></h1>
		</div>
		<div class="main">
		    <div class="container-fluid">
		        <div class="row-fluid">
		            <div class="collectionDesc"><?php echo $itemDesc; ?></div>
		        </div>
		    </div>
		</div>
	</div>
</div>


<div id="columns" class="container">

<div class="masonryrow">
	
            <?php if (metadata('item', 'has files')): ?>

			    	<?php set_loop_records('files', get_current_record('item')->Files);             
			            $uri = WEB_ROOT .'/transcribe/';?>
			    		<?php foreach (loop('files') as $file): 
			                
			                    $status =  $file->getElementTexts('Scriptus', 'Status');
			
			                    if ($status){
			                        $status = $status[0];
			                    }
			                    else {
			                        $status = 'Not Started';
			                    }
			                    
			                    $fileTitle = strip_formatting(metadata('file', array('Dublin Core', 'Title'))); 
			
?>
                    	            <figure>
                    	            <div class="masonrywell">
										<div class="thumbholder">
						                    <?php echo '<a href="' . $uri . $file->item_id . '/' . $file->id . '">' . file_image('thumbnail', array('alt' => $fileTitle)) .'</a>';
							                        $percentNeedsReview = metadata('item', array('Scriptus', 'Percent Needs Review'));
					                                $percentCompleted = metadata('item', array('Scriptus', 'Percent Completed'));
					                                $totalPercent = $percentNeedsReview + $percentCompleted;
					                                if ($totalPercent > 100) $totalPercent = 100;
							                     ?>
										<div class="hoverEdit"><span class="glyphicon glyphicon-pencil"></span></div>
					
										<div class="hoverMeta"><span class="glyphicon glyphicon-info-sign"></span> <?php
											if ($status == 'Not Started') { echo $status; }
											else {echo 'Started';}
											?>
											 </div>
										</div>
										
					                  
					          
					                    
						                <figcaption>
						                    <?php $baseURL = Zend_Controller_Front::getInstance()->getRequest()->getBaseURL(); ?>

						                    <h3><?php echo '<a href="'. $baseURL . '/transcribe/' . $file->item_id.'/'.$file->id.'">' . $fileTitle . '</a>'; ?></h3>
						                    <?php if($itemCreator!='') { echo $itemCreator . '<br>'; }  ?>
						                    <?php if($itemDate!='' && $itemDate!='undated') { echo $itemDate . '<br>';} ?>
						                    <?php echo $itemLoc; ?>
					
						                </figcaption>
                    	            </div>
					            </figure>
			            <?php endforeach; ?>       
            <?php endif; ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
</div>
</div>
    
    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


<?php echo foot(); ?>
