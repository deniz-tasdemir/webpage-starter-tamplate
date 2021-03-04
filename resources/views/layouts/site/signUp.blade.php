@extends('layouts.site.master')

@section ('content')
<div class="wrapper">
    <div class="title">
     üYE OL
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Adınız</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Soyadınız</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>Şifre</label>
          <input type="password" class="input">
       </div>  
      <div class="inputfield">
          <label>Şİfre Tekrarı</label>
          <input type="password" class="input">
       </div> 
        <div class="inputfield">
          <label>Cinsiyet</label>
          <div class="custom_select">
            <select>
              <option value="">Seç</option>
              <option value="male">Bay</option>
              <option value="female">Bayan</option>
            
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Adresiniz</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Telefon Numaranız</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Adres</label>
          <textarea class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label>Posta kodu</label>
          <input type="text" class="input">
       </div> 
     <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Üyelik Sözleşmesini kabul ediyorum.</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Kayıt Ol" class="btn">
      </div>
    </div>
</div>	
@endsection


