<?php

return [
    'accepted' => ':attribute täytyy olla hyväksytty.',
    'active_url' => ':attribute ei ole voimassa oleva URL.',
    'after' => ':attribute täytyy olla päivämäärä jälkeen :date.',
    'alpha' => ':attribute voi sisältää vain kirjaimia.',
    'alpha_dash' => ':attribute voi sisältää vain kirjaimia, numeroita ja alaviivoja.',
    'alpha_num' => ':attribute voi sisältää vain kirjaimia ja numeroita.',
    'array' => ':attribute täytyy olla järjestetty taulukko.',
    'before' => ':attribute täytyy olla päivämäärä ennen päivää :date.',
    'between' => [
        'numeric' => ':attribute täytyy olla vähintään :min ja enintään :max.',
        'file' => ':attribute täytyy vähintään :min ja enintään :max kilotavua.',
        'string' => ':attribute täytyy vähintään :min ja :max merkkiä.',
        'array' => ':attribute täytyy vähintään :min ja :max merkkiä.',
    ],
    'boolean' => ':attribute kentän täytyy olla oikein tai väärin.',
    'confirmed' => ':attribute vahvistus ei täsmää.',
    'date' => ':attribute ei ole päivämäärä.',
    'date_format' => ':attribute ei täsmää formaattiin :format.',
    'different' => ':attribute ja :other eivät voi olla samoja.',
    'digits' => ':attribute täytyy olla :digits pituinen.',
    'digits_between' => ':attribute täytyy olla vähintään :min ja enintään :max pituinen.',
    'email' => ':attribute täytyy olla oikea sähköpostiosoite.',
    'exists' => ':attribute valinta on virheellinen.',
    'filled' => ':attribute kenttä on pakollinen.',
    'image' => ':attribute täytyy olla kuva.',
    'in' => ':attribute valinta on virheellinen.',
    'integer' => ':attribute täytyy olla kokonaisluku.',
    'ip' => ':attribute täytyy olla oikea IP osoite.',
    'json' => ':attribute täytyy olla oikea JSON merkkijono.',
    'max' => [
        'numeric' => ':attribute ei voi olla suurempi kuin :max.',
        'file' => ':attribute ei voi olla suurempi kuin :max kilotavua.',
        'string' => ':attribute ei voi olla suurempi kuin :max merkkiä.',
        'array' => ':attribute ei voi sisältää enempää kuin :max merkkiä.',
    ],
    'mimes' => ':attribute tiedoston täytyy olla muotoa :values.',
    'min' => [
        'numeric' => ':attribute täytyy olla vähintään :min.',
        'file' => ':attribute täytyy olla vähintään :min kilotavua.',
        'string' => ':attribute täytyy olla vähintään :min merkkiä.',
        'array' => ':attribute täytyy olla sisältää vähintään :min merkkiä.',
    ],
    'not_in' => ':attribute valinta ei ole validi.',
    'numeric' => ':attribute täytyy olla numero.',
    'regex' => ':attribute formaatti ei ole validi.',
    'required' => ':attribute kenttä on pakollinen.',
    'required_if' => ':attribute kenttä on pakollinen kun :other on :value.',
    'required_unless' => ':attribute kenttä on pakollinen paitsi jos :other on :values.',
    'required_with' => ':attribute kenttä on pakollinen kun :values on valittu.',
    'required_with_all' => ':attribute kenttä on pakollinen kun :values on valittu.',
    'required_without' => ':attribute on pakollinen kun :values ei ole valittu.',
    'required_without_all' => ':attribute on pakollinen kun mikään näistä :values ei ole valittu.',
    'same' => ':attribute ja :other täytyy olla samat.',
    'size' => [
        'numeric' => ':attribute täytyy olla :size.',
        'file' => ':attribute täytyy olla :size kilotavua.',
        'string' => ':attribute täytyy olla :size merkkiä pitkä.',
        'array' => ':attribute täytyy sisältää :size merkkiä.',
    ],
    'string' => ':attribute täytyy olla lukujono.',
    'timezone' => ':attribute täytyy olla oikea vyöhyke.',
    'unique' => ':attribute on jo olemassa.',
    'url' => ':attribute formaatti ei ole validi.'

];