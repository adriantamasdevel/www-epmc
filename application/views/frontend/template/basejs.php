<script>
var SYSTEM = (function(){
	var _baseUrl = "<?php echo base_url(); ?>";
	return{
		"language": "<?php echo $this->session->userdata('site_lang')?>",
		"baseUrl": _baseUrl,
		"uri_segment_1":"<?php echo (isset($uri_segment1)) ? $uri_segment_1 : '';?>",
		"uri_segment_2":"<?php echo (isset($uri_segment2)) ? $uri_segment_2 : '';?>"
	}
})();

</script>
