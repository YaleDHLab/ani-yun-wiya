
<?php echo head(array('title'=> 'recentComments')); ?>

<style>

  a {
    color: black;
  }

  .recent-comment{
  padding: 10px;
  background-color: #FFFFED;
  border-radius: 10px;
  border-style: solid;
  margin-bottom: 20px;
  margin-left: 10px;
  border-color: #C6A971;
  border-width: 1px;
  border-style: solid;
  box-shadow: 2px 1px rgba(0, 0, 0, 0.3)
  }

  .transcriptionLink {
    text-decoration: none;
    color: black;
  }

  .transcriptionLink:hover {

  }
  #recent-comments a {
    color: black;
    text-decoration: none;

  }

  #recent-comments, #update-account {
    float: left; width: 35%; margin-right: 5px; padding: 5px; 
  }

  #recent-comments h2 {
    padding: 0 8px 0 8px;
    display: block;
  }

  #recent-transcriptions, #user-transcriptions {
    float: left; width: 60%; margin-left: 5px; padding: 5px;
  }

  .transcription-item {
    position: relative;
    overflow: hidden;
    background-color: #f7f7f7;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.10);
    width: 200px;
    float: left;
    margin-right: 10px;
    margin-bottom: 20px;
    padding: 10px;
    height: 440px;
  }

  .comment-content {
    display: block;
    font-size: 1.2em;
  }

  .page-title {
    text-align: center;
  }

  .transcription-snippet {
    background-color: white;
    padding: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    height: 7.15em;
  }

  .transcription-breadcrumbs a {
    font-weight: bold;
  }

  .transcription-item a {
    color: black;
  }

 

  #accordion0 .accordion-toggle {
    padding: 5px;
  }

  .accordion-toggle h3 {
    padding-left: 25px;
    margin-bottom: 0px;
  }

  .accordion-group {
    margin-bottom: 10px;
  }

   .accordion-body {
  padding: 0 8px 0 8px;
}

  #accordion0 {
    padding-top: 0px;
  }

  .accordion-group {
    border: none;
    background-color: rgba(0, 0, 0, 0.03);
  }


  .expanded {
    background: url(themes/diyh/images/minusIcon.png) 5px 10px no-repeat;
    background-size: 10px 10px;
  }

  .notExpanded {
    background: url(themes/diyh/images/plusIcon.png) 5px 10px no-repeat;
    background-size: 10px 10px;
  }

  .author {
    background-color: #854a16;
    color: white;
    float: right;
    padding: 3px;
    border-radius: 5px;
  }

  .postDate {
    background-color: #854a16;
    color: white;
    float: left;
    margin-right: 10px;
    padding: 3px;
    border-radius: 5px;
  }

  .commentContext {
    margin-top: 5px;
    margin-bottom: 5px;
  }
  
  .header-clear {
    height:40px;
  }

  .clearfix {
    clear: both;
  }

  .section-title h1 {
    font-size: 30pt;
  }

  .section-title, .login-link {
    text-align: center;
    margin-bottom: 5px;
  }

  .login-link {
    font-size: 1.2em;
    margin-bottom: 10px;
    border-width: 2px;
    border-style: ridge;
    padding: 3px;
    border-color: rgba(0, 0, 0, 0.03);
  }

   .login-link a {
    color: blue;

   }


  @media (max-width: 959px) {
    #user-transcriptions, #update-account, #recent-comments, #recent-transcriptions {
      width: 95%;
      margin: auto;
      margin-bottom: 10px;
    }
  }
  @media (max-width: 480px) {
    .section-title h1 {
      font-size: 28pt;
    }
  }

  

}

</style>

  <div id="primary">
    <div class="content">
      <div class="section-title"><h1>Your dashboard</h1></div>
      <?php $user = current_user(); ?>
      <?php if (!$user): ?>
        <div class="login-link"><a href="<?php echo WEB_ROOT;?>/guest-user/user/login">Login </a>to see your recent transcriptions and view account options.</div>
      <?php else: ?>
      <div id="update-account">

        <h2>Update account</h2> 

        <a href="<?php echo WEB_ROOT;?>/guest-user/user/update-account">Update account information and password</a>

        </div>

        <div id="user-transcriptions">

        <h2>Your recent transcriptions</h2>
    
          <ul>
          <?php foreach ($this->recentUserTranscriptions as $transcriptionItem): ?>

            <li><a href="<?php echo $transcriptionItem['last_transcribed'] ?>"><?php echo $transcriptionItem['display_title'] ?></a></li>

          <?php endforeach; ?>
        </ul>

        </div>  

        <div class="clearfix"></div>

      <?php endif; ?>

      <div id="recent-comments">

      <!-- <h2>Most recent comments</h2> -->
      
      </div>

      <div id="recent-transcriptions">
         <h2>Most recent transcriptions</h2>
        <?php //print_r($this->recentTranscriptions);
        foreach ($this->recentTranscriptions as $transcriptionItem): ?>
          <div class="transcription-item">
            <?php /* <p>Link to page: <?php echo $transcriptionItem["URL_changed"] ?></p> 
            <p>Collection name: <?php echo $transcriptionItem["collection_name"] ?></p>
            <p> Username: <?php echo $transcriptionItem["username"] ?></p>
            <p> Changed: <?php echo $transcriptionItem["time_changed"] ?></p> 
            <p> Image URL: <?php echo $transcriptionItem["image_url"] ?></p> 
            <p> Transcription: <?php echo snippet_by_word_count($transcriptionItem["transcription"], 10, '...') ?></p> */ ?>

             <a href="<?php echo $transcriptionItem["URL_changed"] ?>" class="transcriptionLink">
              <img src="<?php echo $transcriptionItem["image_url"] ?>" alt="<?php echo $transcriptionItem["file_title"] ?>,a part of <?php echo $transcriptionItem["item_title"] ?>" /> 

              <div class="transcription-snippet">
                <p> <?php echo snippet_by_word_count($transcriptionItem["transcription"], 10, '...') ?></p>
              </div>
             </a>

            <div class="transcription-breadcrumbs">
              <a href="<?php echo $transcriptionItem["URL_changed"] ?>"><?php echo $transcriptionItem["file_title"] ?></a> |
              <?php echo $transcriptionItem["item_link"] ?> | 
              <?php echo $transcriptionItem["collection_link"] ?>
            </div>
            
          </div>
        <?php endforeach; ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>

</div>

<script type="text/javascript">


$("body").on("click", ".accordion-toggle", function() {
  expandedSelection = $('.expanded');
  $(this).toggleClass("expanded").toggleClass("notExpanded");
  expandedSelection.removeClass("expanded");
  expandedSelection.addClass("notExpanded");
  
});



$(document).ready(function () {

  //This JavaScript queries Disqus for the latest comments in order to display the number desired from each collection.  If the number desired from a given collection aren't present in the latest 100 comments, then only the number of comments that are present from that collection will appear.


  var disqusPublicKey = "jmgI7Iex4CKNqXPAVCq6d7gI8HISZRjx442VnEdhl0GDHgJJ20aheCkcmygqHwXX";
  var disqusShortname = "diyh"; 

  $.ajax({
    type: 'GET',
    /*the related=thread URL parameter below is necessary for the query to return links to the posts.  The second URL paramter, limit 100, is the max we can get back.  */
    url: "http://disqus.com/api/3.0/forums/listPosts.jsonp?related=thread&limit=100",
    data: { api_key: disqusPublicKey, forum : disqusShortname},
    dataType: 'jsonp',
    success: function (result) {

      //The collection object will have the collections and then the associated comments stored in it
      collectionObject = {};

      //All the collections currently tracked.  Update as necessary.
      collectionArray = ["Pioneer Lives", "Iowa Women’s Lives: Letters and Diaries", "Szathmary Culinary Manuscripts and Cookbooks", "Building the Transcontinental Railroad", "Nile Kinnick Collection", "Civil War Diaries and Letters", "World War I Diaries and Letters", "World War II Diaries and Letters"];

      //The number of comments we're displaying for each collection
      commentsPerCollection = 3;

      //When we complete a collection, increment this variable
      collectionsComplete = 0;

      //Each time we complete a collection, we check to see if we've completed all the collections by comparing collectionsComplete to collectionsToBeCompleted
      collectionsToBeCompleted = collectionArray.length;

      //Create structure for collection object that we'll use to display collections
      for (var j = 0; j < collectionArray.length; j++){
        collectionObject[collectionArray[j]] = {commentData: [], noOfComments: 0};
      }

      //When each collection has the above number of comments per collection, enoughComments should be true
      enoughComments = false;

      //Used to track iterating through array of results
      i = 0;

      //Iterate through API results until we have the desired number of comments.  The results are found in an object with a property response that is just an array of comments.
      while ((enoughComments == false) && (i < result.response.length)){
        
        //The next comment in the array
        aResponse = result.response[i];


        threadTitle = aResponse.thread.title;

        //To identify the collection, item and file names associated with a comment, we pull that information out of the HTML title.  DON'T CHANGE THE FORMAT OF THE HTML TITLE.
        //The format of a title is DIY History | Transcribe | Collection Name | Item Name | File Name.
        //If the title fits that format, split the string on the '|' character and then pop the last two items off of the resulting array to format a title for the user.
        //If the title doesn't fit that format, then we avoid performing array operations on a non-array with the if statement.  
        if (threadTitle.split(" | ").length >= 5){
          threadArray = threadTitle.split ( " | ");

          //Title we display to the user
          displayTitle = threadArray.pop() + " | " + threadArray.pop();

          //TODO: Needed?
          collectionTitle = threadArray.pop();
        }
        
        //Add comment to what we're going to display as long as we haven't reached the max number of comments for a collection
        if (collectionObject[collectionTitle]["noOfComments"] < commentsPerCollection){

           //Add display title to comment data 
          aResponse["displayTitle"] = displayTitle;

          //Add comment data to object that holds what we're going to display
          collectionObject[collectionTitle]["commentData"].push(aResponse);

          //Track number of comments added for each collection
          collectionObject[collectionTitle]["noOfComments"]++;

          //If the collection we just updated has the max number of comments, we recheck to see if we have the desired comments for each collection.  If so, we exit the loop
          if (collectionObject[collectionTitle]["noOfComments"] == commentsPerCollection){
            collectionsComplete++;
            if (collectionsComplete == collectionsToBeCompleted){
              enoughComments = true;
            }
          }
        }
      i++;  
      }

      //We will build the DOM to append to the recent-comments page with this string
      bodyString = '';

      bodyString += '<div class="accordion" id="accordion0">';

      //Needed to uniquely label the different collapsible parts of the accordion (collapse0, collapse1 and so forth).  Incremented each time through the loop.
      collectionNumberTracker = 0; 

      //Each high-level prop of collectionObject is the name of a collection
      for (collectionName in collectionObject){

        //The title of collection that will be displayed
        collectionTitleString = '<h3>' + collectionName + '</h3>';

        //Below is the Bootstrap markup for the accordion we display.  Most of it is taken from the documentation
        bodyString += '<div class="accordion-group">';
        bodyString += '<div class="accordion-heading">';
        bodyString += '<a class="accordion-toggle';

        if (collectionNumberTracker == 0){
          bodyString += ' expanded';
        }
        else {
          bodyString += ' notExpanded';
        }

        bodyString += '" data-toggle="collapse" data-parent="#accordion0" href="#collapse' + collectionNumberTracker + '">' + collectionTitleString + '</a></div>';

        bodyString += '<div id="collapse' + collectionNumberTracker + '" class="accordion-body collapse ';

        if (collectionNumberTracker == 0){
          bodyString += 'in" aria-expanded="true"';
        }
        else {
          bodyString += 'aria-expanded="false"';
        }

        bodyString += ' >';

        //The value of each high-level property in collectionObject is the comments for each collection and the number of comments.  Here, we get all the comments to iterate through them
        collectionComments = collectionObject[collectionName]["commentData"];


            //Iterate through the comments for each collection
            for (m = 0; m < collectionComments.length; m++){

              //Get an individual comment
              comment = collectionComments[m];

              //Get the message (content of the comment)
              message = comment.message;

              //Strip HTML markup out of message
              message = message.replace('<p>', '');
              message = message.replace('</p>', '');

              //Get other information out of the comment
              author = comment.author.name;
              postDate = comment.createdAt;
              postDate = postDate.replace('T', ', ');
              threadTitle = comment.thread.title;
              displayTitle = comment.displayTitle;

              threadLink = comment.thread.link;
              threadArray = threadLink.split("?");
              threadLink = threadArray[0];


              //postDate = formatDate(postDate, '%H:%m:%s');

              //The comment and a link to where it occurred
              postBody = "<a href='" + threadLink + "?discussOpen=true'>" + "<div class='recent-comment accordion-inner'>" + "<span class='comment-content'>" + message + "</span>"; 

              //Information about where the comment occurred
              postContext =  "<div class='commentContext'><strong>" + displayTitle + "</strong></div>" + '<div><div class="author">' + author + '</div>' + '<div class="postDate">' + postDate + '</div>' +"<div class='clear'></div></div></div>" + "</a>";

              post = postBody + postContext; 

              bodyString += post;
          }
          if (collectionComments.length == 0){
            //The accordion requires content to function when there are no comments in a collection

            //Create hidden content
            bodyString += '<span class="hidden">filler</span>'
          }
        
        bodyString += '</div></div>'; 
        collectionNumberTracker++;
      } 
      bodyString += '</div>'; 
      
      $('#recent-comments').append(bodyString);
    },
    error: function(parsedjson, textStatus, errorThrown){
      console.log("ERRORRRR");
      console.log(parsedjson.response);
      console.log(textStatus);
      console.log(errorThrown);
    }
  });
  
});
</script>

</html>