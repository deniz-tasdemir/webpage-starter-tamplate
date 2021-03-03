@extends('layouts.site.master')

@section ('content')
<div class="kapsacontact">
<div id="contact-form">
	<div>
		<h1>Lütfen Mesajınızı Giriniz.!</h1> 

		   <form method="post" action="/">
			<div>
		      <label for="name">
		      	<span class="required">Adınız Soyadınız: *</span> 
		      	<input type="text" id="name" name="name" value="" placeholder="Adınız Soyadınız" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="email">
		      	<span class="required">Email: *</span>
		      	<input type="email" id="email" name="email" value="" placeholder="Email Adresiniz" tabindex="2" required="required" />
		      </label>  
			</div>
			<div>		          
		      <label for="subject">
		      <span>Konu: </span>
			      <select id="subject" name="subject" tabindex="4">   
			         <option value="hello">Ürün Fiyat Sorgusu</option>
			         <option value="quote">Ürünüm Nerede ?</option>  
			         <option value="general">- Diğer - </option>
			      </select>
		      </label>
			</div>
			<div>		          
		      <label for="message">
		      	<span class="required">Mesajınız: *</span> 
		      	<textarea id="message" name="message" placeholder="Lütfen Mesajınızı Yazınız.!" tabindex="5" required="required"></textarea> 
		      </label>  
			</div>
			<div>		           
		      <button name="submit" type="submit" id="submit" >Gönder</button> 
			</div>
		   </form>		  
</div>
</div>
</div>
@endsection


