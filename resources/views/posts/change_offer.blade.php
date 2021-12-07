@extends('layouts.app')

@section('content')

<div class='container'>
    <h1><p class="font-weight-bold mt-4 mb-4">Edytuj ogłoszenie</p></h1>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-4 mb-4">
                <form action="{{route('update_post', $post)}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                    <p class="font-weight-bold">Im więcej szczegółów, tym lepiej!</p>
                      <label for="exampleInputEmail1">Tytuł ogłoszenia*</label>
                      <input type="text" class="form-control mb-3  @error('tytul') border border-danger @enderror" id="tytul" name="tytul"  aria-describedby="emailHelp" placeholder="np. iPhone 11 na gwarancji" value="{{$post->tytul}} ">
                        
                      @error('tytul')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                      
                      
                      <label for="exampleInputEmail1">Cena</label>
                      <input type="text" class="form-control mb-3" id="cena" name="cena"  aria-describedby="emailHelp" value="{{$post->cena}}">
    
                      <label for="kategoria">Kategoria</label>
                      
                      <div class="input-group mb-3">
                        <select class="custom-select" id="kategoria" name="kategoria">
                          <option selected>Brak kategorii</option>
                          <option value="Motoryzacja">Motoryzacja</option>
                          <option value="Nieruchomości">Nieruchomości</option>
                          <option value="Dom i Ogród">Dom i Ogród</option>
                          <option value="Elektronika">Elektronika</option>
                          <option value="Moda">Moda</option>
                          <option value="Rolnictwo">Rolnictwo</option>
                          <option value="Zwierzęta">Zwierzęta</option>
                          <option value="Dla Dzieci">Dla Dzieci</option>
                          <option value="Sport i Hobby">Sport i Hobby</option>
                          <option value="Muzyka i Edukacja">Muzyka i Edukacja</option>
                          <option value="Usługi i Firmy">Usługi i Firmy</option>
                          <option value="Ślub i Wesele">Ślub i Wesele</option>
                          <option value="Oddam za darmo">Oddam za darmo</option>
                          <option value="Zamienię">Zamienię</option>
                          <option value="Praca w sprzedaży">Praca w sprzedaży</option>
                          <option value="Wynajem budowa">Wynajem budowa</option>
                          <option value="Piękny ogród">Piękny ogród</option>
    
                        </select>
                      </div>
    
                      <label for="kategoria">Lokalizacja</label>
                      <br>
                      <div class="input-group mb-3">
                        <select class="custom-select" id="lokalizacja" name="lokalizacja">
                          <option selected>Brak lokalizacji</option>
                          <option value="Dolnośląskie">Dolnośląskie</option>
                          <option value="Kujawsko-pomorskie">Kujawsko-pomorskie</option>
                          <option value="Lubelskie">Lubelskie</option>
                          <option value="Lubuskie">Lubuskie</option>
                          <option value="Łódzkie">Łódzkie</option>
                          <option value="Małopolskie">Małopolskie</option>
                          <option value="Mazowieckie">Mazowieckie</option>
                          <option value="Opolskie">Opolskie</option>
                          <option value="Podkarpackie">Podkarpackie</option>
                          <option value="Podlaskie">Podlaskie</option>
                          <option value="Pomorskie">Pomorskie</option>
                          <option value="Śląskie">Śląskie</option>
                          <option value="Świętokrzyskie">Świętokrzyskie</option>
                          <option value="Warmińsko-mazurskie">Warmińsko-mazurskie</option>
                          <option value="Wielkopolskie">Wielkopolskie</option>
                          <option value="Zachodniopomorskie">Zachodniopomorskie</option>
    
                        </select>
                      </div>
                                <label for="kategoria">Opis</label>
                            <textarea class="form-control" aria-label="With textarea" id="opis" name="opis"></textarea>
                            <div class="form-group">
                                <br>
                                <label>Wybierz zdjęcie</label>
                                <br>
                                <input type="file" id="image" name="image">
                                <p class="help-block">Only png and jpg allowed</p>
                              </div>
                              <button class="btn border-primary" type="submit">Edytuj ogłoszenie</button>
                        </div>
                      </form>
                    </div>
                      </div>
            <div class="col-md-6">
            </div>
        </div>


@endsection