<?php
  /**
   *  Plugin Name: Citatele lui Motivonti
   *  Version: 1.1
   *  Plugin URI: http://motivonti.ro/plugin-de-citate.html
   *  Description: Selecteaza aleatoriu un citat si il afiseaza pe blog sub forma unui widget.
   *  Author: GeorgeJipa
   *  Author URI: http://georgejipa.com/        
   **/
   
   ob_start();
   
   /**
    *  Cateva variabile...
    **/       
    $url = get_settings("siteurl");    
   
   /**
    *  Array citate
    **/            
    $citate = array(
      array( "citat" => "Nu spune lumii ceea ce ştii să faci, fă-o şi gata.", "autor" => "Riccardo Oda" ),
      array( "citat" => "Cei care greşesc se împart în două categorii: Aceia care au acţionat fără sa gândească şi cei care au gândit fără să acţioneze.", "autor" => "John Charles Salak" ),
      array( "citat" => "Dacă continui să faci ceea ce faci, vei continua să primeşti ceea ce primeşti.", "autor" => "John M. Capozzi" ),  
      array( "citat" => "Când vezi o afacere de succes înseamnă că cineva a luat o decizie curajoasă.", "autor" => "Peter Drucker" ),  
      array( "citat" => "Tot ceea ce suntem este rezultatul a ceea ce am gândit.", "autor" => "Buddha" ),  
      array( "citat" => "Când 'aş vrea' devine 'vreau', când 'ar trebui' devine 'trebuie', când 'mai întâi' şi 'mai apoi' devin 'acum', atunci şi doar atunci dorinţele încep să se transforme în realitate.", "autor" => "Roberto Redfort" ),  
      array( "citat" => "Dacă ţin foarte mult să fac ceva, acel ceva nu se numeşte muncă.", "autor" => "Richard Bach" ),  
      array( "citat" => "Nu-mi spune cât de greu munceşti, spune-mi ceea ce ai realizat.", "autor" => "James Ling" ),  
      array( "citat" => "Eşecul este singura oportunitate pentru a o lua de la capăt într-un mod mai inteligent.", "autor" => "Henry Ford" ),  
      array( "citat" => "Succesul vine din eşec după eşec, fără să-ţi pierzi entuziasmul.", "autor" => "Winston Churchill" ),
      array( "citat" => "Cea mai mare greşeală pe care o poate face cineva este să îi fie frică să greşească.", "autor" => "Elbert Hubbard" ),  
      array( "citat" => "Succesul pare să depindă în mare măsură de propria ta rezistenţă după ce toţi ceilalti au renunţat. ", "autor" => "Willian Feather" ),
      array( "citat" => "Ai vrea să îţi furnizez o formulă a succesului? Este extrem de simplu. Dublează-ţi rata de eşecuri. ", "autor" => "Thomas J. Watson" ),  
      array( "citat" => "Orice situaţie nefavorabilă poartă în sine sămânţa unui beneficiu echivalent, dacă nu chiar mai mare. ", "autor" => "Napoleon Hill" ),  
      array( "citat" => "Lucrurile care ne produc suferinţă ne educă.", "autor" => "Benjamin Franklin" ),
      array( "citat" => "Înainte de a putea realiza un lucru, trebui să-l vezi clar. ", "autor" => "Alex Morrison" ),  
      array( "citat" => "Doar noi deţinem controlul asupra imaginilor care ne ocupă mintea.", "autor" => "Jeff Keller" ),  
      array( "citat" => "Imaginaţia este mai importantă decât cunoaşterea.", "autor" => "Albert Einstein" ),  
      array( "citat" => "Vizualizarea este arta de a vedea lucrurile invizibile pentru ceilalţi.", "autor" => "Jonathan Swift" ),
      array( "citat" => "Dacă poţi avea un vis, înseamnă că-l poţi realiza.", "autor" => "Walt Disney" ),  
      array( "citat" => "Oamenii care vorbesc tot timpul despre lipsa banilor nu vor ajunge să-i strângă.", "autor" => "Jeff Keller" ),  
      array( "citat" => "Ziua evoluează în funcţie de direcţia în care se mişcă colţurile gurii tale.", "autor" => "" ),  
      array( "citat" => "Alege cuvinte care te vor îndrepta în direcţia scopurilor tale.", "autor" => "Jeff Keller" ),  
      array( "citat" => "Cuvintele dezvăluie starea de spirit, caracterul şi dispoziţia vorbitorului.", "autor" => "Plutarh" ),  
      array( "citat" => "Cuvintele sunt, desigur, cel mai puternic drog folosit de omenire.", "autor" => "Rudyard Kipling" ),  
      array( "citat" => "Cuvintele pe care le alegi în mod consecvent îţi vor modela destinul.", "autor" => "Anthony Robbins" ),  
      array( "citat" => "O persoană nu-şi poate alege circumstanţele, dar îşi poate alege gândurile şi, indirect dar sigur, îşi poate modifica circumstanţele.", "autor" => "James Allen" ),  
      array( "citat" => "Nu există nimic mai jalnic sau prostesc decât a anticipa ghinionul. Câtă nebunie este în a aştepta răul dinainte de a exista?", "autor" => "Lucius Annaeus Seneca" ),  
      array( "citat" => "NIMIC nu e urât. Eu n-am văzut nimic urât în viaţa mea: căci, indiferent de forma unui obiect, lumina, umbrele şi perspectiva îl vor ajuta întotdeauna să arate minunat.", "autor" => "John Constable" ),  
      array( "citat" => "Iubeşte şi fă ceea ce vrei.", "autor" => "Sfântul Augustin" ),  
      array( "citat" => "Viaţa poate fi înţeleasă numai privind înapoi, dar trebuie trăită privind înainte.", "autor" => "Kirkegaard" ),  
      array( "citat" => "Timiditatea - un defect al oamenilor mari, tupeul - defectul oamenilor mici.", "autor" => "Maurice Coyaud" ),  
      array( "citat" => "Nu trebuie să fii trist că n-ai fost remarcat. Fii trist că n-ai făcut nimic remarcabil.", "autor" => "Confucius" ),  
      array( "citat" => "Este de o mie de ori mai bine să fii optimist şi să te înseli, decât să fii pesimist şi să ai dreptate.", "autor" => "Jack Penn" ),  
      array( "citat" => "Problemele, ca şi copiii, cresc dacă le hrăneşti.", "autor" => "Lady Holland" ),  	
      array( "citat" => "Fii întotdeauna foarte ferm cu momentul prezent, fiecare clipă are o valoare infinită deoarece este reprezentarea eternităţii.", "autor" => "Johann Wolfgang Von Goethe" ),  
      array( "citat" => "Dacă aveţi atâta apă proaspătă câtă doriţi să beţi şi atâta mâncare câtă vreţi să mâncaţi, ar trebui sa nu vă plângeţi niciodată de nimic.", "autor" => "Eddie Rickenbacker" ),  
      array( "citat" => "Obstacolele sunt acele lucruri groaznice pe care le vezi atunci când îţi iei ochii de la ţelul tău.", "autor" => "Henry Ford" ),  
      array( "citat" => "Faci ceea ce ai visat să faci sau faci ceea ce faci doar pentru că împrejurările te-au adus aici?", "autor" => "Budhha" ),  
      array( "citat" => "Oamenii supravieţuiesc pentru că se adaptează.", "autor" => "Bobby Voicu" ),  
      array( "citat" => "Prieteni îţi vor extinde viziunea... sau îţi vor omorî visurile.", "autor" => "" ),  
      array( "citat" => "Un pesimist va vedea mereu partea goală a paharului, un optimist va vedea mereu partea plină a paharului iar un realist mereu va şti că stând în preajma paharului va trebui cândva să-l spele.", "autor" => "" ),  
      array( "citat" => "Singura modalitate de a scăpa de închisoarea fricii este acţiunea.", "autor" => "Joe Tye" ),  
      array( "citat" => "A fugi de propriile temeri este o strategie sortită eşecului.", "autor" => "Jeff Keller" ),  
      array( "citat" => "Fă acel lucru de care îţi este frică şi frica va pieri cu siguranţă.", "autor" => "Ralph Waldo Emerson" ),  
      array( "citat" => "Tocmai posibilitatea de a-ţi împlini un vis face viaţa interesantă.", "autor" => "Paulo Coelho" ),  
      array( "citat" => "Nu mă gândesc la viitor, va veni el oricum.", "autor" => "Albert Einstein" ),  
      array( "citat" => "Poţi obţine tot ce îţi doreşti în viaţă dacă îi vei ajuta pe alţii să obţină ceea ce îşi doresc. ", "autor" => "Zig Ziglar" ),
      array( "citat" => "Dacă vei fi o persoană pozitivă şi entuziasmată, oamenii vor dori să-şi petreacă timpul cu tine.", "autor" => "Jeff Keller" ),  
      array( "citat" => "Obţin ceea ce-şi doresc nu aceia care iau, ci aceia care dau.", "autor" => "Eugene Benge" ),  
      array( "citat" => "Cel mai repede şi cel mai bine poţi reuşi ajutându-i pe alţii să reuşească.", "autor" => "Napoleon Hill" ),  
      array( "citat" => "Tratează cu demnitate şi respect orice persoană pe care o întâlneşti.", "autor" => "Jeff Keller" ),  
      array( "citat" => "Dacă vrei să-ţi schimbi condiţia, începe prin a gândi diferit.", "autor" => "Norman Vincent Peale" ),  
      array( "citat" => "Acţionează ca şi cum ţi-ar fi imposibil să dai greş.", "autor" => "Dorothea Brande" ),  
      array( "citat" => "Oamenii ce visează ziua sunt periculoşi deoarece ei visează cu ochii deschişi şi fac ca visele lor să devină realitate.", "autor" => "D. H. Lawrence" ),  
      array( "citat" => "Adevărul despre noi îl reprezintă ceea ce credem în adâncul sufletului despre noi înşine.", "autor" => "Orison Swett Marden" ),  
      array( "citat" => "Nicio persoană nu îşi depăşeşte cele mai îndrăzneţe aşteptări dacă nu începe cu aştepări îndrăzneţe.", "autor" => "Ralph Charell" ),  
      array( "citat" => "Chiar dacă aş şti că mâine întregul pământ va exploda în bucăţele, eu tot mi-aş planta mărul.", "autor" => "Martin Luther King" ),  
      array( "citat" => "Cereţi şi vi se va da; căutaţi şi veţi afla; bateţi şi vi se va deschide. Căci oricine cere ia, cel care caută află şi celui care bate i se va deschide.", "autor" => "" ),  
      array( "citat" => "Păstrează-ţi simţul umorului. Nu cere permisiunea, pur şi simplu fă-o! Fă ca orice să devină prilej de bună dispoziţie.", "autor" => "Georgia Ulrich" ),  
      array( "citat" => "Atunci când îţi repeţi suficient de mult o idee ea va începe să devină parte din tine. ", "autor" => "Tom Hopkins" ), 
      array( "citat" => "Nimic nu îl poate opri pe omul cu o atitudine mentală corectă să îşi îndeplinească scopul. ", "autor" => "Thomas Jefferson" ),  
      array( "citat" => "Lucrurile nu sunt bune sau rele în sine, gândirea noastră le face să fie astfel.", "autor" => "William Shakespeare" ),  
      array( "citat" => "Succesul şi eşecul sunt deopotrivă dezastruoase.", "autor" => "Tenessee Williams" ), 
      array( "citat" => "Succesul se ascunde în ambiţia de a nu renunţa.", "autor" => "Marius Torok" ),  
      array( "citat" => "Succes este o stare mentală. Dacă îţi doreşti să ai succes, trebuie să începi să te gândeşti la tine însuţi ca la o persoană de succes.", "autor" => "Dr. Joyce Brothers" ),  
      array( "citat" => "De tot ce ai nevoie în viaţa asta este încredere şi ingoranţă şi atunci succesul este garantat.", "autor" => "Mark Twain" ),  
      array( "citat" => "Scara succesului nu este niciodată aglomerată pe treapta cea mai de sus.", "autor" => "Napoleon Hill" ),  
      array( "citat" => "Atribui succesul meu următorului fapt: niciodată nu am acceptat şi nu am dat nicio scuză.", "autor" => "Florence Nightingale" ),  
      array( "citat" => "Atitudinea reprezintă o putere secretă, care funcţionează 24 de ore pe zi, spre binele sau răul cuiva.", "autor" => "" ),  
      array( "citat" => "Nu întotdeauna poţi controla împrejurările. Dar îţi poţi controla propriile gânduri.", "autor" => "Charles Popplestone" ),  
      array( "citat" => "O persoană fericită nu este aceea aflată într-o anumită situaţie, ci mai degrabă aceea care are o anumită atitudine.", "autor" => "Hugh Downs" ), 
      array( "citat" => "Prin autodisciplină totul devine posibil.", "autor" => "Theodore Roosevelt" ),  
      array( "citat" => "Disciplina este puntea de legatură dintre obiective şi realizari.", "autor" => "Jim Rohn" ),  
      array( "citat" => "Cel ce nu a făcut niciodată vreo greşeală nu a încercat niciodată ceva nou.", "autor" => "Albert Einstein" ),  
      array( "citat" => "Învingătorii îşi fac un obicei din a-şi construi propriile aşteptări pozitive înainte de eveniment.", "autor" => "Brian Tracy" ),  
      array( "citat" => "Dacă schimbi modul în care priveşti anumite lucruri, acele lucruri se vor schimba.", "autor" => "Wayne Dyer" ),  
      array( "citat" => "Absoarbe ce e folositor, elimină ce nu este şi adauga ceea ce ţi-este unic.", "autor" => "Bruce Lee" ),  
      array( "citat" => "A şti nu este de ajuns; trebuie să şi aplici. A vrea nu este de ajuns; trebuie să şi faci ceva în această privinţă.", "autor" => "Johann Wolfgang von Goethe" ),  
      array( "citat" => "O viaţă neexaminată nu merită trăită.", "autor" => "Platon" ),  
      array( "citat" => "Lasă-l pe acela care schimbă lumea întâi să se schimbe pe sine.", "autor" => "Socrate" ),  
      array( "citat" => "Oamenii iubitori trăiesc într-o lume iubitoare. Oamenii ostili trăiesc într-o lume ostilă. Aceeaşi lume.", "autor" => "Wayne Dyer" ),  
      array( "citat" => "Iartă-ţi duşmanii - nimic nu-i poate enerva mai tare.", "autor" => "Oscar Wilde" ),  
      array( "citat" => "Dintre toate animalele, omul e singurul ce minte.", "autor" => "Mark Twain" ),  
      array( "citat" => "Fii ca un timbru pe o scrisoare! Lipeşte-te de un lucru până ajungi la destinaţie.", "autor" => "Josh Billings" ), 
      array( "citat" => "Timpul este cel mai bun profesor. Din păcate, el îşi omoară toţi elevii.", "autor" => "Hector Berlioz" ), 
      array( "citat" => "Omul sărac nu e acela ce nu are niciun cent, ci acela ce nu are niciun vis.", "autor" => "Harry Kemp" ), 
      array( "citat" => "Obiceiurile şi rutina au o putere incredibilă de a irosi şi a distruge.", "autor" => "Henri-Marie Cardinal de Lubac" ), 
      array( "citat" => "Am fost cel mai bogat din lume cand n-aveam niciun ban.", "autor" => "Pasarea Colibri" ), 
      array( "citat" => "Cele mai important lucruri în viaţă sunt să ai ce mânca, să ai ce bea şi săi ai pe cine iubi.", "autor" => "Brendan Behan" ), 
      array( "citat" => "Există saşe bilioane de oameni în lumea asta şi uneori tot ce ne trebuie este un singur om.", "autor" => "Anonim" ), 
      array( "citat" => "Dacă vrei să obţii tot ce e mai bun de la ceilalţi, trebui să oferi ceea ce e mai bun din tine.", "autor" => "Harry Firestone" ), 
      array( "citat" => "Nu este adevărat că nu îndrăznim pentru că este greu, ci este greu pentru că nu îndrăznim.", "autor" => "Seneca" ), 
      array( "citat" => "Fă cât de multe greşeli cu putinţă, dar ţine minte un singur lucru: nu face de două ori aceeaşi greşeală. Şi te vei dezvolta.", "autor" => "Osho" ), 
      array( "citat" => "Nu întoarce spatele unor prilejuri până nu eşti sigur că nu ai nimic de învăţat din ele.", "autor" => "Richard Bach" ), 
      array( "citat" => "Nu te compara cu ceilalţi. Lumina lor nu împiedică şi nu diminuează lumina din tine.", "autor" => "Paul Ferrini" ), 
      array( "citat" => "Nu-i vorba de mărimea câinelui în luptă, dar mărimea luptei din câine.", "autor" => "Mark Twain" ), 
      array( "citat" => "Viaţa nu înseamnă să supravieţuieşti unei furtuni ci să ştii să dansezi în ploaie!", "autor" => "Anonim" ), 
      array( "citat" => "Dacă ai voinţă poţi muta munţii din loc. Dacă ai minte, îi laşi acolo că nu te deranjează!", "autor" => "Anonim" ), 
      array( "citat" => "Dacă acţiunile tale îi inspiră pe alţii să viseze mai mult, să înveţe mai mult, să facă mai mult şi să se dezvolte, atunci eşti un lider.", "autor" => "John Quincy Adams" ), 
      array( "citat" => "Viitorul aparţine celor ce cred în frumuseţea visurilor lor.", "autor" => "Eleanor Roosevelt" ), 
      array( "citat" => "Tânărul ştie regulile, dar bătrânul ştie excepţiile.", "autor" => "Oliver Wendell Holmes" )
    );  
    
   /**
     *  Functie template() pentru returnarea HTML-ului
     *  - de aici se poate modifica partea HTML a pluginului, iar CSS-ul din style.css     
     **/
    function template($citat, $autor) {
      if( empty($autor) ) { $autor = "Anonim"; }
      echo "<ul class=\"citate\">\n";
      echo "<div id=\"citate-top\"></div>\n";
      echo "<div id=\"citate-middle\">\n";
      echo "<span class=\"bq_start bq_group\"></span>\n";
      echo "{$citat}\n";
      echo "<br /><br />- <b>{$autor}</b>\n";
      echo "<span class=\"bq_end bq_group\"></span>\n";
      echo "</div>\n";
      echo "<div id=\"citate-bottom\"></div>\n";
      echo "<a class=\"motivonti_fs\" href=\"http://motivonti.ro/\" title=\"Citatele lui Motivonti\">Citatele lui Motivonti</a>\n";
      echo "</ul>\n";
    }            
    
   /**
     *  Functie motivonti() pentru afisarea citatului
     **/
    function motivonti() {
      global $citate;
        
      $random = @array_rand($citate, 1);
      template($citate[$random]["citat"],$citate[$random]["autor"]);       
    }
      
   /**
     *  Functie motivonti_widget() pentru adaugarea functiei motivonti() ca widget
     **/
    function motivonti_widget() {
      function register_motivonti_widget($args) {
  	   extract($args);
  		 echo $args['before_widget'];
       motivonti(); 
       echo $args['after_widget'];
  	  }
  	 register_sidebar_widget("Motivonti", "register_motivonti_widget");
    }             

     
   /**
     *  Functie motivonti_header() pentru adaugare CSS Style
     **/
    function motivonti_header() {
      wp_enqueue_style('motivonti_css', plugins_url('style.css', __FILE__)); 
    }
           
   /**
     *  Cateva actiuni...
     **/             
    add_action('wp_print_styles', 'motivonti_header');
    add_action("plugins_loaded", "motivonti_widget");
?>