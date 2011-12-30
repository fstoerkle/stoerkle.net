<?php
/**
 * Export Thai lexicon topic
 *
 * @language th
 * @package modx
 * @subpackage lexicon
  
 * @author Mr.Kittipong Intaboot COE#18,KKU
 * @updated 2010-07-21
 */
$_lang['export_site_cacheable'] = 'รวมไฟล์ที่ไม่สามารถเก็บแคชด้วย:';
$_lang['export_site_exporting_document'] = 'ส่งออกไฟล์ <strong>%s</strong> ของ <strong>%s</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i>%s</i>, ไอดี %s</small><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_lang['export_site_failed'] = '<span style="color:#990000">ล้มเหลว!</span>';
$_lang['export_site_html'] = 'ส่งออกเป็น HTML';
$_lang['export_site_maxtime'] = 'เวลาการส่งออกสูงสุด:';
$_lang['export_site_maxtime_message'] = 'คุณสามารถระบจำนวนวินาทีให้ MODx ใช้ในการส่งออก (แทนที่การตั้งค่าของ PHP) ใส่ 0 สำหรับการส่งออกไม่จำกัดเวลา โปรดทราบว่าการตั้งค่า 0 หรือระยะเวลามากอาจจะทำอะไรประหลาดๆ กับเซิร์ฟเวอร์ของคุณซึ่งเราไม่แนะนำ';
$_lang['export_site_message'] = '<p>การใช้งานฟังก์ชันนี้ คุณสามารถส่งออกเว็บไซต์ทั้งหมดเป็นไฟล์ HTML โปรดทราบว่าคุณจะสูญเสียความสามารถหลายๆ อย่างของ MODx ที่คุณควรทำได้ เช่น:</p><ul><li>การอ่านหน้าเว็บของไฟล์ที่ส่งออกจะไม่ถูกบันทึก</li><li>สนิปเพตจะไม่ทำงานบนไฟล์ส่งออก</li><li>เอกสารปกติเท่านั้นที่จะถูกส่งออก โดยจะไม่ส่งออกพวก Weblink</li><li>กระบวนการส่งออกอาจล้มเหลวถ้าเอกสารของคุณบรรจุสนิปเพต ซึ่งส่งส่วนหัวการเปลี่นทิศทาง</li><li>ขึ้นอยู่กับว่าคุณเขียนเอกสาร สไตล์ชีท รูปภาพ และการออกแบบเว็บไซต์ของคุณ ซึ่งอาจจะไม่สมบูรณ์ วิธีการแก้ไขคือ ให้คุณบันทึก/ย้าย ไฟล์ส่งออกไปไว้ที่โฟลเดอร์เดียวกันกับโฟลเดอร์หลักของ MODx ที่ไฟล์ index.php ตั้งอยู่</li></ul><p>กรุณากรอกแบบฟอร์มแล้วกด \'ส่งออก\' เพื่อเริ่มกระบวนการส่งออก  ไฟล์ส่งออกจะถูกเก็บไว้ในโฟลเดอร์ที่คุณระบุที่มันจะเป็นไปได้ ขึ้นอยู่กับขนาดของเว็บไซต์ของคุณ การส่งออกอาจต้องใช้เวลา</p><p><em>ไฟล์ใด ๆ ที่มีอยู่แล้วจะถูกแทนที่ด้วยไฟล์ใหม่หากชื่อของพวกมันเหมือนกัน!</em></p>';
$_lang['export_site_numberdocs'] = '<p><strong>พบ %s เอกสาร เพื่อจะส่งออก...</strong></p>';
$_lang['export_site_prefix'] = 'คำนำหน้าชื่อไฟล์:';
$_lang['export_site_start'] = 'เริ่มการส่งออก';
$_lang['export_site_success'] = '<span style="color:#009900">ประสบความสำเร็จ!</span>';
$_lang['export_site_suffix'] = 'คำตามท้ายชื่อไฟล์:';
$_lang['export_site_target_unwritable'] = 'โฟลเดอร์เป้าหมายไม่สามารถเขียนได้ กรุณาตรวจสอบโฟลเดอร์นั้น แล้วลองอีกครั้ง';
$_lang['export_site_time'] = 'ส่งออกเสร็จสิ้น โดยใช้เวลา %s วินาทีจึงเรียบร้อย';