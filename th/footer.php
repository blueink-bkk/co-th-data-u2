<footer class="py-5">
	 <div class="container text-center">
		<h6 class="text-white">*ULTIMHEAT ® เป็นเครื่องหมายทางการค้าที่ได้รับการจดทะเบียนอย่างถูกต้อง</h6>
		<center>

          <font size="2" face="Cordia"><b>ผลิตภัณฑ์ฮีทเตอร์หลากหลายประเภท :</b> <a href="SF-RectangularTH.html">แผ่นทำความร้อน</a> / <a href="<?= base_url; ?>th/anti-freeze-band-heaters.html">แถบทำความร้อนป้องกันการแช่แข็ง</a> / <a href="<?= base_url; ?>th/band-heaters.html">แถบทำความร้อน</a> / <a href="<?= base_url; ?>th/jacket-heater-e.html">แถบซิลิโคนให้ความร้อนแก่ถัง</a> / <a href="<?= base_url; ?>th/jacket-flexible-heaters-models.html">เครื่องทำความร้อนแบบแจ็คเก็ตยืดหยุ่นได้</a> <!-- / <a href="Options-TH.html">อุปกรณ์และส่วนประกอบ </a> --> <br>
          <b><a href="<?= base_url; ?>th/control-and-safety.html"> ส่วนควบคุมอุณหภูมิและอุปกรณ์ความปลอดภัย:</a></b> <a href="G1.html" target="_blank">Creep action fixed setting strip thermostat</a> / <a href="G2.html" target="_blank">Snap action fixed setting strip thermostat</a> / <a href="G3.html" target="_blank">Snap action fixed setting disc thermostat</a> / <a href="G5.html" target="_blank">Thermal Fuses</a> / <a href="G6-1.html" target="_blank">Thermocouple</a> / <a href="G6-2.html" target="_blank">Resistance Temperature Devices (RTD)</a> / <a href="G9.html" target="_blank">Bulb and Capillary Control</a>/ <a href="G10.html" target="_blank">Bimetal surface control</a>/ <a href="G11.html" target="_blank">Remote bulb thermostat</a>/ <a href="G12.html" target="_blank">Remote electric temperature control</a></font>
      </center>

		<div class="line"></div>
	 </div>
	 <div class="container-fluid">
		<div class="container pt-5">
		   <div class="row">
			  <div class="col-md-5 location">
				 <h6 class="cmpny-nam mb-2">บริษัท บลู อิงค์ จำกัด </h6>
				 <address class="addrs">บริษัท บลู อิงค์ จำกัด
ผู้ผลิตวัสดุพื้นผิวทำความร้อนยืดหยุ่นซิลิโคนและผู้จัดจำหน่ายผลิตภัณฑ์ ULTIMHEAT ในประเทศไทยและภูมิภาคอาเซียน</address>
				 <address> อาคารมอร์นิ่งดิว, 41-1 ซอยสุขุมวิท46, ถนนสุขุมวิท, แขวงพระโขนง, เขตคลองเตย, กรุงเทพฯ 10110, ประเทศไทย </address>
			  </div>
			  <div class="col-md-7">
				 <div class="social-media">
					<a href="tel:+66(0)27135196"><i class="fa fa-phone" aria-hidden="true"></i> +66(0)27135196</a>
					<a href="tel:+66(0)27135197"><i class="fa fa-fax" aria-hidden="true"></i> +66(0)27135197 </a>
					<a href="<?= base_url; ?>"><i class="fa fa-link" aria-hidden="true"></i> www.ultimheat.co.th</a>
					<a href="<?= base_url; ?>th/email-us.html"><i class="fa fa-envelope" aria-hidden="true"></i>ส่งอีเมลถึงเรา</a>
				 </div>
			  </div>
		   </div>
		</div>
	 </div>
</footer>

<script>
	$(".change_language").on("click", function(){
		var current_url = window.location.href;
		var lng = $(this).attr("alt");
		var changed_url;
			if(lng == 'th') {
				changed_url = current_url.replace("/en/", "/th/");
			} else {
				changed_url = current_url.replace("/th/", "/en/");
			}
		
		//alert(changed_url);
		window.location.replace(changed_url);
	});
</script>