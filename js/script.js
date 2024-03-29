
$(function() {

	 // price picker
	var priceSlider = $("#price-range");
	priceSlider.slider({
	        tooltip_split: true
	    });

	    $("#minprice").change(function(){
	        var values = priceSlider.slider('getValue');
	        values[0] = parseInt($('#minprice').val());
	        priceSlider.slider('setValue', values);
	    });

	    $("#maxprice").change(function(){
	        var values = priceSlider.slider('getValue');
	        values[1] = parseInt($('#maxprice').val());
	        priceSlider.slider('setValue', values);
	    });

	    priceSlider.on('change', function(){
	        var values = priceSlider.slider('getValue');
	        $("#minprice").val(values[0]);
	        $("#maxprice").val(values[1]);
	    });
		
var defaultData = [
  {
    text: 'WOMEN',
    href: '#women',
    tags: ['6'],
    nodes: [
      {
        text: 'NEW ARRIVALS',
        href: '#new',
        tags: ['0'],
      },
      {
        text: 'TOPS & BLOUSES',
        href: '#top',
        tags: ['0']
      },
      {
        text: 'PANTS & DENIM',
        href: '#pants',
        tags: ['0']
      },
      {
        text: 'DRESSES & SKIRTS',
        href: '#dresses',
        tags: ['0']
      },
      {
        text: 'ETHNIC WEAR',
        href: '#ethnic',
        tags: ['0']
      },
      {
        text: 'GIRLS APPAREL',
        href: '#girls',
        tags: ['0']
      }
    ]
  },
  {
    text: 'MEN',
    href: '#men',
    tags: ['0']
  },
  {
    text: 'SALES',
    href: '#sales',
     tags: ['0']
  },
  {
    text: 'ACCESSORIES',
    href: '#accessoiries',
    tags: ['0']
  },
  {
    text: 'VIP',
    href: '#vip'  ,
    tags: ['0']
  }
];




$('#tree').treeview({
  color: "grey",
  showBorder: false,
  data: defaultData,
	onNodeSelected: function(event, node) {
		console.log(node.nodeId);
	              $('#Categorie-name').html( node.text );
				  if(node.nodeId == 0)
				  {
					  $(".new").show();
					  $(".skirts").show();
				  }
				  else if(node.nodeId == 1)
				  {
					  $(".new").show();
					  $(".skirts").hide();
				  }
				  else if(node.nodeId == 4)
				  {
					  $(".new").hide();
					  $(".skirts").show();
				  }
				  else
				  {
				  	$(".new").hide();
					$(".skirts").hide();
				  }
	            },
	            onNodeUnselected: function (event, node) {
	              //Nothing
	            }
});


$('.add-cart-button').click(function(e) {
    console.log("PRODUCT", $(this).data("productid"));

    var id = $(this).data("productid");
    $.ajax({
        url: "/shop/?ctrl=carts&action=add&params=" + id
    }).done(function(data) {
        var total = parseInt($("#cart-qty").html());
        $("#cart-qty").html(total + 1);

    })
});



});