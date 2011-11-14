<?
// In this editor you can translate all strings. In the third column you can compare the strings to another language (set it in the select box on the bottom of the window). Please note that changes will not appear right away, they need to be imported by a developer.
// Every language string can have a singular and plural variant by separating them by ";", e.g. "Restaurant;Restaurants". The first string is the singular form, the second the plural form.  Optionally you can define the Gender (F, M, N) for the word by prepending one of those characters, e.g. "N;Büro;Büros" (German for "office").
// When translating a language variant (e.g. 'British English', code 'en-gb') please translate only strings which are different from the base language.
$lang_str["base_language"]="en"; // Set the language code for a base language which should be used if a string has not been translated to this language. Usually you want to set it to 'en' (English), but for a language variants and dialects set it to the main language. Some world regions might also consider another base language as more appropriate.

$lang_str["lang:current"]="Italiano"; // The name of the current language in the native tongue (e.g. "Deutsch" for German)

// General
$lang_str["general_info"]="Informazioni generali";
$lang_str["yes"]="si";
$lang_str["no"]="no";
$lang_str["ok"]="Ok";
$lang_str["save"]="Salva";
$lang_str["saved"]="Salvato"; // for dialog boxes confirming saving
$lang_str["cancel"]="Annulla";
$lang_str["show"]="Mostra";
$lang_str["edit"]="Modifica";
$lang_str["delete"]="Elimina";
$lang_str["history"]="Storia";
$lang_str["choose"]="Scegli";
$lang_str["help"]="Aiuto";
$lang_str["longitude"]=array("Longitudine", "Longitudini");
$lang_str["latitude"]=array("Latitudine", "Latitudini");
$lang_str["noname"]="(nessun nome)";
$lang_str["info_back"]="torna alla vista d'insieme";
$lang_str["info_zoom"]="zoom";
$lang_str["nothing_found"]="non trovato";
$lang_str["loading"]="In caricamento...";
$lang_str["more"]="altri";
$lang_str["source"]="Provenienza";
$lang_str["unnamed"]="privo di nome";
$lang_str["zoom"]="Livello di zoom";
$lang_str["no_message"]="nessun messaggio";

// Headings
$lang_str["head:general_info"]="Informazioni generali";
$lang_str["head:stops"]="Stop";
$lang_str["head:routes"]="Itinerari";
$lang_str["head:members"]="Membri";
$lang_str["head:address"]="Indirizzo";
$lang_str["head:internal"]="OSM Interno";
$lang_str["head:services"]="Servizi";
$lang_str["head:culture"]="Cultura";
$lang_str["head:graves"]="Tombe importanti";
$lang_str["head:routing"]="Pianificazione del percorso";
$lang_str["head:search"]="Cerca";
$lang_str["head:actions"]=array("Azione", "Azioni");
$lang_str["head:location"]="Posizione";
$lang_str["head:tags"]=array("Etichetta", "Etichette");
$lang_str["head:whats_here"]="Cosa c'è qui?";

$lang_str["action_browse"]="visualizza in OSM";
$lang_str["action_edit"]="modifica in OSM";

$lang_str["geo_click_pos"]="Clicca sulla tua posizione sulla mappa";
$lang_str["geo_set_pos"]="Fissa la mia posizione";
$lang_str["geo_change_pos"]="Modifica la mia posizione";

$lang_str["routing_type_car"]="Automobile";
$lang_str["routing_type_car_shortest"]="Automobile (il più breve)";
$lang_str["routing_type_bicycle"]="Bicicletta";
$lang_str["routing_type_foot"]="A piedi";
$lang_str["routing_type"]="Tipo di itinerario";
$lang_str["routing_distance"]="Distanza";
$lang_str["routing_time"]="Tempi";
$lang_str["routing_disclaimer"]="Pianificazione del percorso: (c)  <a href='http://www.cloudmade.com'>Cloudmade</a>";

$lang_str["list_info"]="Scegli una categoria per sfogliare i contenuti della mappa o clicca su un oggetto sulla mappa per visualizzarne i dettagli";
$lang_str["list_leisure_sport_tourism"]="Tempo libero, sport e turismo";

// Mapkey

$lang_str["grave_is_on"]="Grave is on";

$lang_str["main:options"]="Options";
$lang_str["main:about"]="About";
$lang_str["main:donate"]="Donate";
$lang_str["main:licence"]="Map Data: <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">cc-by-sa</a> <a href=\"http://www.openstreetmap.org\">OpenStreetMap</a> contributors | OSB: <a href=\"http://wiki.openstreetmap.org/wiki/User:Skunk\">Stephan Plepelits</a> and <a href=\"http://wiki.openstreetmap.org/wiki/OpenStreetBrowser#People_involved\">contributors</a>";
$lang_str["main:permalink"]="Permalink";

$lang_str["help:no_object"]="<div class='obj_actions'><a class='zoom' href='#'></a></div><h1>Object not found</h1>No object with the ID \"%s\" could be found. This can be due to one (or more) of the following reasons:<ul><li>The ID is wrong.</li><li>The object has been identified by a third party site and is not (yet) available in the OpenStreetBrowser.</li><li>The object is outside of the supported area.</li><li>The link you were following was old and the object has been deleted from OpenStreetMap.</li></ul>";

$lang_str["options:autozoom"]="Menu selezione zoom";
$lang_str["help:autozoom"]="Se un oggetto è selezionato la mappa potrebbe subire ingrandimenti oppure spostamenti. Con le seguenti opzioni è possibile scegliere:";
$lang_str["options:autozoom:pan"]="muoviti al punto selezonato";
$lang_str["options:autozoom:move"]="salta al punto selezionato";
$lang_str["options:autozoom:stay"]="non fare nulla";

$lang_str["options:language_support"]="Seleziona la lingua";
$lang_str["help:language_support"]="Qui puoi scegliere le tue lingue preferite. La prima cambia la lingua dell'interfaccia mentre la seconda la lingua dei contenuti. Le informazioni possono essere tradotte in molti idiomi selezionando l'opportuna \"lingua dati\".";
$lang_str["options:ui_lang"]="Lingua interfaccia";
$lang_str["options:data_lang"]="Lingua dati";
$lang_str["lang:"]="Lingua del tuo browser";
#$lang_str["lang:auto"]="Same as interface language";

#$lang_str["overlay:data"]="Data";
#$lang_str["overlay:draggable"]="Markers";

#$lang_str["user:no_auth"]="Username or password wrong!";
#$lang_str["user:login_text"]="Log in to OpenStreetBrowser:";
#$lang_str["user:create_user"]="Create a new user:";
#$lang_str["user:username"]="Username";
#$lang_str["user:email"]="E-mail address";
#$lang_str["user:password"]="Password";
#$lang_str["user:password_verify"]="Verify password";
#$lang_str["user:old_password"]="Old password";
#$lang_str["user:no_username"]="Please supply a username!";
#$lang_str["user:password_no_match"]="Passwords do not match!";
#$lang_str["user:full_name"]="Full name";
#$lang_str["user:user_exists"]="Username already exists";
#$lang_str["user:login"]="Login";
#$lang_str["user:logged_in_as"]="Logged in as ";
#$lang_str["user:logout"]="Logout";

#$lang_str["attention"]="Attention: ";
#$lang_str["error"]="An error occured: ";
#$lang_str["error:not_logged_in"]="you are not logged in";

#$lang_str["category"]=array("Category", "Categories");
#$lang_str["more_categories"]="More categories";
#$lang_str["category:status"]="Status";
#$lang_str["category:data_status"]="Status";
#$lang_str["category:old_version"]="A new version of this category is being prepared.";
#$lang_str["category:not_compiled"]="New category is being prepared.";

#$lang_str["category:new_rule"]="New Rule";
#$lang_str["category_rule_tag:match"]="Match";
#$lang_str["category_rule_tag:description"]="Description";
#$lang_str["category_chooser:choose"]="Choose a category";
#$lang_str["category_chooser:new"]="New category";
#$lang_str["category:sub_category"]=array("Sub-category", "Sub-categories");

#$lang_str["basemap:osb"]="OpenStreetBrowser";
#$lang_str["basemap:mapnik"]="Standard (Mapnik)";
#$lang_str["basemap:osmarender"]="Standard (OsmaRender)";
#$lang_str["basemap:cyclemap"]="CycleMap";
