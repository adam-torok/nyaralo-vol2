var today = new Date();
today.toISOString().substring(0, 10);
var tomorrow = new Date();
tomorrow.setDate(today.getDate() + 2);


var options = {
	allowSameDayRange : false,
	lang : 'hu',
	displayMode	: 'inline',
	weekStart : 1,
	labelFrom : 'Mettől',
	dateFormat: 'YYYY-MM-DD',
	labelTo : 'Meddig',
	todayLabel : 'Ma',
	clearLabel	: 'Törlés',
	startDate: today,
	endDate: tomorrow,
	minDate: today
}


const calendars = bulmaCalendar.attach('[type="date"]', options);
const element = document.querySelector('#rentdate');

$('body').click(function(){
	console.log(element.value);
})

$("#closemodal").on('click',function(){
	$(".modal").fadeOut('fast');
})

$("#rent").submit(function(e) {
	let msg = $("#msg").val();
	let name = $("#name").val();
	let email = $("#email").val();
	let interval = element.value;
    e.preventDefault();
    $.ajax({
		type: "POST",
		url: 'php_logic/sendmail.php',
		data: { name:name, msg: msg, email:email, interval:interval} ,
		success: function(data)
		{
			$("#success").fadeIn('fast');
			console.log(element.value);
		}
		})
});

$("#contact-form").submit(function(e) {
	let msg = $("#cmsg").val();
	let name = $("#cname").val();
	let email = $("#cemail").val();
    e.preventDefault();
    $.ajax({
		type: "POST",
		url: 'php_logic/sendcontactmail.php',
		data: { cname:name, cmsg: msg, cemail:email} ,
		success: function(data)
		{
			$("#success").fadeIn('fast');
			console.log(bulmaCalendar.endTime);
		}
		})
});