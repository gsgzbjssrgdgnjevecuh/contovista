$(document).ready(function() {


  let currentPage = 2;
  $('.load-more-articles').on('click',function(e) {
    e.preventDefault();
    let loadMoreArticlesButton = $(this);
    let articleTaxonomy = $('.articles__wrapper--load-more').data('taxonomy');
    
    loadMoreArticlesButton.addClass('btn--bordered--plus--loading');

    console.log( 'Page:' + currentPage ); 

    let articlesData = { 
      action: "load_more_posts", 
      taxonomy: articleTaxonomy,
      paged: currentPage
    };
    
    $.post(contovista.ajaxurl, articlesData) 
      .done(function(response) {
        if( $.trim(response) != '' ) {
          $('.articles__wrapper--load-more').append(response);
          loadMoreArticlesButton.removeClass('btn--bordered--plus--loading');
          currentPage++;
        } else {
          loadMoreArticlesButton.removeClass('btn--bordered--plus--loading');
          loadMoreArticlesButton.addClass('btn--disbled');
        }
      })
      .fail(function(xhr, status, error) {
        console.log(xhr); 
      }) 
    
    
   
  });


  $('.load-more-team-members').on('click',function(e) {
    e.preventDefault();

    let dataTeamTerm = $('.team-card__wrapper').data('team-term');
    let loadMoreTeaamMembersButton = $(this);

    loadMoreTeaamMembersButton.addClass('btn--bordered--plus--loading');

    let articlesData = { 
      action: "load_more_team_members", 
      dataTeamTerm: dataTeamTerm
    };
    
    $.post(contovista.ajaxurl, articlesData) 
      .done(function(response) {

        $('.team-card__wrapper').append(response);
        loadMoreTeaamMembersButton.removeClass('btn--bordered--plus--loading');
        loadMoreTeaamMembersButton.hide();
        $('.team-card').addClass('team-card--expanded');
      })
      .fail(function(xhr, status, error) {
        console.log(xhr);
      })

  });


}); // jQuery ends here    