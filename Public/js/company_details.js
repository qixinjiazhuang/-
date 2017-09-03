var txtCom=$('.zxPany-txtWrap .item-des .s-con').html();
if(txtCom){
	if(txtCom.length>=53){
		$('.zx-expandMore').show();
	}
}
$('.zx-expandMore').on('click', function(event) {
	var expandTxt=$('.txt-con').val();
	$(this).siblings('.s-con').html(expandTxt);
	$(this).hide().siblings('.zx-expandLess').show();
});
$('.zx-expandLess').on('click', function(event) {
	$(this).siblings('.s-con').html(txtCom);
	$(this).hide().siblings('.zx-expandMore').show();
});