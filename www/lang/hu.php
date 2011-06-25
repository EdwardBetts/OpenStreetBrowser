<?
// All untranslated strings have a # in front. When you translate a string
// please remove this hash.

//  Every language string looks like this:
//  $lang_str["restaurant"]=array("Restaurant", "Restaurants");
//  the first entry is the translation of the language string in Singular,
//  the second the Plural form.
//
//  Optionally you can define the Gender (F, M, N) of this word, e.g. the
//  German translation for office:
//  $lang_str["office"]=array(N, "Büro", "Büros");
//
//  If a Singular/Plural form is not
//  suitable/necessary you can ignore the array, e.g.
//  $lang_str["help"]="Help";

// General
#$lang_str["general_info"]="General Information";
$lang_str["yes"]="igen";
$lang_str["no"]="nem";
$lang_str["save"]=array("Mentés");
$lang_str["cancel"]=array("Mégse");
#$lang_str["longitude"]=array("Longitude", "Longitudes");
#$lang_str["latitude"]=array("Latitude", "Latitudes");
$lang_str["noname"]="(névtelen)";
#$lang_str["info_back"]="back to overview";
$lang_str["info_zoom"]="nagyítás";
#$lang_str["nothing_found"]=array("nothing found");
$lang_str["loading"]=array("Betöltés...");

// Headings
#$lang_str["head:general_info"]="General Information";
#$lang_str["head:stops"]="Stops";
$lang_str["head:routes"]="Utvonalak";
#$lang_str["head:members"]="Members";
$lang_str["head:address"]="Címek";
#$lang_str["head:internal"]="OSM Internal";
$lang_str["head:wikipedia"]="Wikipédia";
$lang_str["head:housenumbers"]="Házszámok";
$lang_str["head:roads"]="Utak";
$lang_str["head:rails"]="Vasutak";
$lang_str["head:places"]="Helyek";
$lang_str["head:borders"]="Határok";
$lang_str["head:landuse"]="Területfunkciók";
$lang_str["head:buildings"]="Épületek";
#$lang_str["head:pt"]="Public Transportation";
#$lang_str["head:services"]="Services";
$lang_str["head:culture"]="Kulúra";
#$lang_str["head:graves"]="Important Graves";
#$lang_str["head:routing"]="Routing";
$lang_str["head:search"]="Keresés";
$lang_str["head:actions"]=array("Lehetőség", "Lehetőségek");
#$lang_str["head:location"]="Location";

$lang_str["action_browse"]="böngészés az OSM-ben";
$lang_str["action_edit"]="szerkesztés az OSM-ben";

#$lang_str["geo_click_pos"]=array("Click on your position on the map");
$lang_str["geo_set_pos"]="Saját pozícióm beállítása";
$lang_str["geo_change_pos"]="Saját pozícióm választása";

$lang_str["routing_type_car"]="Autóval";
$lang_str["routing_type_car_shortest"]="Autóval (rövidebb út)";
$lang_str["routing_type_bicycle"]="Biciklivel";
$lang_str["routing_type_foot"]="Gyalog";
#$lang_str["routing_type"]="Route type";
$lang_str["routing_distance"]="Távolság";
$lang_str["routing_time"]="Idó";
#$lang_str["routing_disclaimer"]="Routing: (c) by <a href='http://www.cloudmade.com'>Cloudmade</a>";

#$lang_str["list_info"]="Choose a category to browse map content or click on an object on the map for details";
$lang_str["list_leisure_sport_tourism"]="Szabadidő, sport és turizmus";

// Mapkey
#$lang_str["map_key:head"]="Map key";
$lang_str["map_key:zoom"]="Nagyítási színt";

#$lang_str["grave_is_on"]="Grave is on";

#$lang_str["main:map_key"]="Map Key";
$lang_str["main:options"]="Beállítások";
$lang_str["main:about"]="Névjegy";
$lang_str["main:donate"]="Támogatás";
#$lang_str["main:licence"]="Map Data: <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">cc-by-sa</a> <a href=\"http://www.openstreetmap.org\">OpenStreetMap</a> contributors | OSB: <a href=\"http://wiki.openstreetmap.org/wiki/User:Skunk\">Stephan Plepelits</a> and <a href=\"http://wiki.openstreetmap.org/wiki/OpenStreetBrowser#People_involved\">contributors</a>";
#$lang_str["main:permalink"]="Permalink";

#$lang_str["help:no_object"]="<div class='obj_actions'><a class='zoom' href='#'></a></div><h1>Object not found</h1>No object with the ID \"%s\" could be found. This can be due to one (or more) of the following reasons:<ul><li>The ID is wrong.</li><li>The object has been identified by a third party site and is not (yet) available in the OpenStreetBrowser.</li><li>The object is outside of the supported area.</li><li>The link you were following was old and the object has been deleted from OpenStreetMap.</li></ul>";

#$lang_str["start:choose"]=array("Choose map view");
#$lang_str["start:geolocation"]=array("get geolocation");
#$lang_str["start:lastview"]=array("last view");
#$lang_str["start:savedview"]=array("last permalink");
#$lang_str["start:startnormal"]=array("keep view");
#$lang_str["start:remember"]=array("remember decision");
$lang_str["start:edit"]=array("szerkesztés...");

#$lang_str["options:autozoom"]=array("Autozoom behaviour");
#$lang_str["help:autozoom"]=array("When choosing an object, the view port pans to that object, the zoom level might also get changed. With this option you can choose between different modes.");
#$lang_str["options:autozoom:pan"]=array("Pan to current object (nicer)");
#$lang_str["options:autozoom:move"]=array("Move to current object (faster)");
#$lang_str["options:autozoom:stay"]=array("Never change viewport automatically");

#$lang_str["options:language_support"]=array("Language Support");
#$lang_str["help:language_support"]=array("You can choose your prefered languages with this options. The first option changes the language of the user interface. The second option changes the data language. Date of many geographic objects has been translated to several languages. If no translation is available or \"Local language\" was chosen, the main language of the object is displayed.");
$lang_str["options:ui_lang"]=array("Interfész nyelv");
#$lang_str["options:data_lang"]=array("Adatok nyelve");
#$lang_str["lang:"]=array("Local language");

$lang_str["overlay:data"]=array("Adat");
#$lang_str["overlay:draggable"]=array("Markers");

#$lang_str["wikipedia:read_more"]="read more";

$lang_str["basemap:osb"]="OpenStreetBrowser";
$lang_str["basemap:mapnik"]="Eredeti (Mapnik)";
#$lang_str["basemap:osmarender"]="Eredeti (OsmaRender)";
#$lang_str["basemap:cyclemap"]="CycleMap";

// please finish this list, see list.php for full list of languages
$lang_str["lang:de"]="Német";
$lang_str["lang:bg"]="Bulgár";
$lang_str["lang:en"]="Angol";
$lang_str["lang:es"]="Spanyol";
$lang_str["lang:it"]="Olasz";
$lang_str["lang:fr"]="Francia";
$lang_str["lang:uk"]="Ukrán";
$lang_str["lang:ru"]="Orosz";
$lang_str["lang:ja"]="Japán";

// the following language strings are deprecated
#$lang_str["cat:leisure"]=array("Leisure, Sport and Shopping ");
#$lang_str["cat:leisure/gastro"]=array("Gastronomy");
#$lang_str["cat:leisure/leisure"]=array("Leisure");
$lang_str["cat:leisure/sport"]=array("Sport");
#$lang_str["cat:leisure/shop"]=array("Vásárlás");
$lang_str["cat:culture"]=array("Kultúra és vallás");
$lang_str["cat:culture/culture"]=array("Kultúra");
$lang_str["cat:culture/religion"]=array("Vallás");
#$lang_str["cat:culture/historic"]=array("Historic");
$lang_str["cat:culture/tourism"]=array("Túrizmus");
$lang_str["cat:shop"]=array("Vásárlás");
#$lang_str["cat:services"]=array("Services");
#$lang_str["cat:services/communication"]=array("Communication");
#$lang_str["cat:services/financial"]=array("Financial");
#$lang_str["cat:services/emergency"]=array("Emergency Services");
#$lang_str["cat:services/health"]=array("Health");
#$lang_str["cat:services/education"]=array("Educational Services");
#$lang_str["cat:services/public"]=array("Public Services");
#$lang_str["cat:services/tourism"]=array("Touristic Services");
#$lang_str["cat:places"]=array("Place", "Places");
#$lang_str["cat:places/places"]=array("Place", "Places");
#$lang_str["cat:places/residential"]=array("Residential Areas");
#$lang_str["cat:places/streets"]=array("Street Directory");
#$lang_str["cat:places/natural"]=array("Natural Formations");
#$lang_str["cat:transport"]=array("Transportation");
#$lang_str["cat:transport/car"]=array("Individual Traffic");
#$lang_str["cat:transport/car/amenities"]=array("Amenities");
#$lang_str["cat:transport/car/routes"]=array("Routes");
#$lang_str["cat:transport/car/furniture"]=array("Street Furniture");
#$lang_str["cat:transport/pt"]=array("Public Transportation");
#$lang_str["cat:transport/pt/amenities"]=array("Amenities");
#$lang_str["cat:transport/pt/routes"]=array("Routes");
#$lang_str["cat:transport/pt/stops"]=array("Stops &amp; Stations");
#$lang_str["cat:transport/alternative"]=array("Alternative (Cycling, Hiking, ...)");
#$lang_str["cat:transport/alternative/amenities"]=array("Amenities");
#$lang_str["cat:transport/alternative/routes"]=array("Routes");
#$lang_str["cat:transport/other"]=array("Other");
#$lang_str["cat:agri_ind"]=array("Agriculture and Industry");
#$lang_str["cat:agri_ind/power"]=array("Power");
#$lang_str["cat:agri_ind/works"]=array("Works");
#$lang_str["cat:agri_ind/agriculture"]=array("Agriculture");
#$lang_str["cat:agri_ind/construction"]=array("Construction Sites");
#$lang_str["cat:agri_ind/railway"]=array("Railway");
#$lang_str["cat:agri_ind/resources"]=array("Resource Extraction");
#$lang_str["cat:agri_ind/landfill"]=array("Disposal");
#$lang_str["cat:agri_ind/military"]=array("Military");

#$lang_str["sub_type=t3|type=historic"]="UNESCO World Heritage Site";
#$lang_str["sub_type=|type=place_of_worship"]="Place of Worship";
#$lang_str["sub_type=t1|type=place_of_worship"]="Christian Church";
#$lang_str["sub_type=t2|type=place_of_worship"]="Islamic Mosque";
#$lang_str["sub_type=t3|type=place_of_worship"]="Jewish Synagogue";
#$lang_str["sub_type=t4|type=place_of_worship"]="Sikh ?";

#$lang_str["highway_type=motorway"]="Motorway";
#$lang_str["highway_type=trunk"]="Trunk Road";
#$lang_str["highway_type=primary"]="Primary Road";
#$lang_str["highway_type=secondary"]="Secondary Road";
#$lang_str["highway_type=tertiary"]="Tertiary Road";
#$lang_str["highway_type=minor"]="Minor Road";
#$lang_str["highway_type=service"]="Service Road";
#$lang_str["highway_type=pedestrian"]="Pedestrian Zone";
#$lang_str["highway_type=track"]="Track";
#$lang_str["highway_type=path"]="Path (Foot, Cycle, Bridle)";
#$lang_str["square_type=pedestrian"]="Square";
#$lang_str["square_type=parking"]="Parking Zone";
#$lang_str["highway_type=aero_run"]="Airport Runway";
#$lang_str["highway_type=aero_taxi"]="Airport Taxiway";

$lang_str["sub_type=t1|type=communication"]="Posta";
$lang_str["sub_type=t2|type=communication"]="Postaláda";
$lang_str["sub_type=t1|type=economic"]="ATM-ek";
$lang_str["sub_type=t2|type=economic"]="Bankok";
#$lang_str["sub_type=t1|type=services"]="Recycling";
#$lang_str["sub_type=t1|type=man_made"]="Tower";
#$lang_str["sub_type=t2|type=man_made"]="Wind Power";
#$lang_str["sub_type=t3|type=man_made"]="Windmill";
$lang_str["sub_type=t1|type=emergency"]="Kórház";
$lang_str["sub_type=t1|type=health"]="Gyógyszertár";
#$lang_str["sub_type=t1|type=tourism"]="Hotels, Hostels, ...";
#$lang_str["sub_type=t2|type=tourism"]="Camp &amp; Caravan Sites";
$lang_str["sub_type=t3|type=tourism"]="Idegenforgalmi információ";

  // Foos & Drink
  $lang_str["list_food_drink"]="Étel és ital";
#    $lang_str["list_amenity_biergarten"]="Beer gardens";
    $lang_str["list_amenity_restaurant"]="Éttermek";
    $lang_str["list_amenity_fast_food"]="Gyorséttermek";
    $lang_str["list_amenity_cafe"]="Kávézók";
#    $lang_str["list_amenity_vending_machine"]="Vending Machines";
    $lang_str["list_amenity_pub"]="Kocsmák";
    $lang_str["list_amenity_bar"]="Bárok";
#    $lang_str["list_amenity_nightclub"]="Nightclubs";
    $lang_str["list_amenity_casino"]="Kaszinók";
// Leisure
  $lang_str["list_leisure"]="Szabadidő";
#    $lang_str["list_leisure_sports_centre"]="Sport Centres";
#    $lang_str["list_leisure_golf_course"]="Golf Courses";
#    $lang_str["list_leisure_stadium"]="Stadiums";
#    $lang_str["list_leisure_track"]="Tracks";
#    $lang_str["list_leisure_pitch"]="Pitches";
#    $lang_str["list_leisure_water_park"]="Water Parks";
#    $lang_str["list_leisure_marina"]="Marinas";
#    $lang_str["list_leisure_slipway"]="Slipways";
#    $lang_str["list_leisure_fishing"]="Fishing";
#    $lang_str["list_leisure_nature_reserve"]="Nature Reserves";
#    $lang_str["list_leisure_park"]="Parks";
#    $lang_str["list_leisure_playground"]="Playgrounds";
#    $lang_str["list_leisure_garden"]="Gardens";
#    $lang_str["list_leisure_common"]="Commons";
#    $lang_str["list_leisure_ice_rink"]="Ice Rinks";
#    $lang_str["list_leisure_miniature_golf"]="Miniature Golfs";
#    $lang_str["list_leisure_swimming_pool"]="Swimming Pools";
#    $lang_str["list_leisure_beach_resort"]="Beach Resorts";
#    $lang_str["list_leisure_bird_hide"]="Bird Hides";
    $lang_str["list_leisure_sport"]="OEgyéb sport";
// Sport
#    $lang_str["list_sport_9pin"]="9pin Bowling";
#    $lang_str["list_sport_10pin"]="10pin Bowling";
#    $lang_str["list_sport_archery"]="Archery";
#    $lang_str["list_sport_athletics"]="Athletics";
#    $lang_str["list_sport_australian_football"]="Australian Football";
#    $lang_str["list_sport_baseball"]="Baseball";
#    $lang_str["list_sport_basketball"]="Basketball";
#    $lang_str["list_sport_beachvolleyball"]="Beachvolleyball";
#    $lang_str["list_sport_boules"]="Boules";
#    $lang_str["list_sport_bowls"]="Bowls";
#    $lang_str["list_sport_canoe"]="Canoe";
#    $lang_str["list_sport_chess"]="Chess";
#    $lang_str["list_sport_climbing"]="Climbing";
#    $lang_str["list_sport_cricket"]="Cricket";
#    $lang_str["list_sport_cricket_nets"]="Cricket Nets";
#    $lang_str["list_sport_croquet"]="Croquet";
#    $lang_str["list_sport_cycling"]="Cycling";
#    $lang_str["list_sport_diving"]="Diving";
#    $lang_str["list_sport_dog_racing"]="Dog Racing";
#    $lang_str["list_sport_equestrian"]="Equestrian";
#    $lang_str["list_sport_football"]="Football";
    $lang_str["list_sport_golf"]="Golf";
#    $lang_str["list_sport_gymnastics"]="Gymnastics";
#    $lang_str["list_sport_hockey"]="Hockey";
#    $lang_str["list_sport_horse_racing"]="Horse Racing";
#    $lang_str["list_sport_korfball"]="Korfball";
#   $lang_str["list_sport_motor"]="Motor";
#    $lang_str["list_sport_multi"]="Multi";
#    $lang_str["list_sport_orienteering"]="Orienteering";
#    $lang_str["list_sport_paddle_tennis"]="Paddle Tennis";
#    $lang_str["list_sport_paragliding"]="Paragliding";
#    $lang_str["list_sport_pelota"]="Pelota";
#    $lang_str["list_sport_racquet"]="Racquet";
#    $lang_str["list_sport_rowing"]="Rowing";
#    $lang_str["list_sport_rugby"]="Rugby";
#    $lang_str["list_sport_shooting"]="Shooting";
#    $lang_str["list_sport_skating"]="Skating";
#    $lang_str["list_sport_skateboard"]="Skateboard";
#    $lang_str["list_sport_skiing"]="Skiing";
#    $lang_str["list_sport_soccer"]="Soccer";
#    $lang_str["list_sport_swimming"]="Swimming";
#    $lang_str["list_sport_table_tennis"]="Table Tennis";
    $lang_str["list_sport_team_handball"]="Kézilabda";
    $lang_str["list_sport_tennis"]="Tenisz";
#    $lang_str["list_sport_volleyball"]="Volleyball";
// Cycle & Hiking
#  $lang_str["list_cycle_hiking"]="Amenities for Cycling and Hiking";
#  $lang_str["list_ch_routes"]="Cycle and Hiking Routes";
#    $lang_str["list_shop_bicycle"]="Bicycle Shops";
#    $lang_str["list_shop_outdoor"]="Outdoor Shops";
#    $lang_str["list_amenity_bicycle_rental"]="Bicycle Rentals";
#    $lang_str["list_amenity_bicycle_parking"]="Bicycle Parkings";
#    $lang_str["list_amenity_shelter"]="Shelters";
#    $lang_str["list_amenity_drinking_water"]="Drinking Water Supplies";
#    $lang_str["list_amenity_signpost"]="Signposts";
#    $lang_str["list_amenity_alpine_hut"]="Alpine Huts";
#    $lang_str["list_tourism_alpine_hut"]="Alpine Huts";
#    $lang_str["list_amenity_mountain_hut"]="Mountain Huts";
#    $lang_str["list_tourism_picnic_site"]="Picnic Sites";
#    $lang_str["list_tourism_viewpoint"]="Viewpoints";
  // Tourism
#  $lang_str["list_tourism"]="Tourism";
#    $lang_str["list_tourism_hotel"]="Hotels";
#    $lang_str["list_tourism_motel"]="Motels";
#    $lang_str["list_tourism_guest_house"]="Guest Houses";
#    $lang_str["list_tourism_hostel"]="Hostels";
#    $lang_str["list_tourism_chalet"]="Chalets";
#    $lang_str["list_tourism_camp_site"]="Camp Sites";
#    $lang_str["list_tourism_caravan_site"]="Caravan Sites";
#    $lang_str["list_tourism_information"]="Tourist Informations";
  // Attractions
#  $lang_str["list_attractions"]="Attractions";
#    $lang_str["list_tourism_theme_park"]="Theme Parks";
#    $lang_str["list_tourism_zoo"]="Zoos";
#    $lang_str["list_tourism_attraction"]="Attractions";

$lang_str["list_shopping"]="Vásárlás";
#  $lang_str["list_general"]="General";
#    $lang_str["list_shop_mall"]="Shopping Malls";
#    $lang_str["list_shop_shopping_center"]="Shopping Centers";
#    $lang_str["list_shop_shopping_centre"]="Shopping Centres";
#    $lang_str["list_shop_convenience"]="Convenience Stores";
#    $lang_str["list_shop_department_store"]="Department Stores";
#    $lang_str["list_shop_general"]="General Stores";
#    $lang_str["list_amenity_marketplace"]="Marketplaces";
  $lang_str["list_food"]="Étel";
#    $lang_str["list_shop_supermarket"]="Supermarkets";
#    $lang_str["list_shop_groceries"]="Groceries";
#    $lang_str["list_shop_grocery"]="Groceries";
#    $lang_str["list_shop_alcohol"]="Alcohol";
#    $lang_str["list_shop_bakery"]="Bakeries";
#    $lang_str["list_shop_beverages"]="Beverages";
#    $lang_str["list_shop_butcher"]="Butchers";
#    $lang_str["list_shop_organic"]="Organic Food";
#    $lang_str["list_shop_wine"]="Wine Shops";
#    $lang_str["list_shop_fish"]="Fish Shops";
#    $lang_str["list_shop_market"]="Markets";
  $lang_str["list_sport"]="Sport";
#    $lang_str["list_shop_sports"]="General Sports";
#    $lang_str["list_shop_bicycle"]="Bicycle Shops";
#    $lang_str["list_shop_outdoor"]="Outdoor Shops";
  $lang_str["list_culture"]="Kultúra";
    $lang_str["list_shop_books"]="Könyves boltok";
#    $lang_str["list_shop_kiosk"]="Kiosks";
#    $lang_str["list_shop_video"]="Video hops";
#    $lang_str["list_shop_newsagent"]="Newsagents";
#    $lang_str["list_shop_ticket"]="Ticket Sales";
#    $lang_str["list_shop_music"]="Music Shops";
#    $lang_str["list_shop_photo"]="Photo Shops";
#    $lang_str["list_shop_travel_agency"]="Travel Agencies";
#  $lang_str["list_car"]="Car &amp; Motorcycle";
#    $lang_str["list_shop_car"]="Car Shop";
#    $lang_str["list_shop_car_dealer"]="Car Dealers";
#    $lang_str["list_shop_car_repair"]="Car Repair";
#    $lang_str["list_shop_car_parts"]="Car Parts";
#    $lang_str["list_shop_motorcycle"]="Motorcycle Shops";
#  $lang_str["list_fashion"]="Fashion";
#    $lang_str["list_shop_clothes"]="Clothes";
#    $lang_str["list_shop_florist"]="Florists";
#    $lang_str["list_shop_hairdresser"]="Hair dressers";
#    $lang_str["list_shop_shoes"]="Shoe Shops";
#    $lang_str["list_shop_fashion"]="Fashion Shops";
#    $lang_str["list_shop_jewelry"]="Jewelries";
#    $lang_str["list_shop_apparel"]="Apparel Shops";
#    $lang_str["list_shop_second_hand"]="Second Hand Shops";
#  $lang_str["list_home_office"]="Home &amp; Office";
#    $lang_str["list_shop_computer"]="Computer Stores";
#    $lang_str["list_shop_doityourself"]="Do it yourself";
#    $lang_str["list_shop_electronics"]="Electronics";
#    $lang_str["list_shop_hardware"]="Hardware Shops";
#    $lang_str["list_shop_hifi"]="Hifi Shops";
#    $lang_str["list_shop_dry_cleaning"]="Dry Cleaning";
#    $lang_str["list_shop_furniture"]="Furniture Shops";
#    $lang_str["list_shop_garden_centre"]="Garden Centres";
#    $lang_str["list_shop_laundry"]="Laundries";
#    $lang_str["list_shop_stationery"]="Stationery Shops";
#    $lang_str["list_shop_toys"]="Toys";
#    $lang_str["list_shop_estate_agent"]="Estate Agents";
#    $lang_str["list_shop_pet"]="Pet Shops";
//$lang_str["list_health"]="Health";
#    $lang_str["list_shop_optician"]="Opticians";
#    $lang_str["list_shop_chemist"]="Chemists";
#    $lang_str["list_shop_drugstore"]="Drug Stores";
#    $lang_str["list_shop_pharmacy"]="Pharmacies";
  $lang_str["list_othershops"]="Egyéb boltok";
#    $lang_str["list_shop_fixme"]="To be fixed";
#    $lang_str["list_shop_shop"]="Unknown Shops";
#    $lang_str["list_shop_other"]="Other Shops";
#    $lang_str["list_shop_vending_machine"]="Vending Machines";

$lang_str["list_education_culture"]="Oktatás és kultúra";
  $lang_str["list_culture"]="kultúra";
#    $lang_str["list_amenity_arts_centre"]="Arts Centres";
#    $lang_str["list_amenity_theatre"]="Theatres";
    $lang_str["list_tourism_museum"]="Múzeumok";
#    $lang_str["list_tourism_artwork"]="Artworks";
#    $lang_str["list_amenity_fountain"]="Fountains";
#    $lang_str["list_amenity_cinema"]="Cinemas";
#    $lang_str["list_amenity_studio"]="TV/Radio/Recording Studios";
#    $lang_str["list_shop_trumpet"]="Music Shops";

  $lang_str["list_education"]="Oktatás";
#    $lang_str["list_amenity_university"]="Universities";
#    $lang_str["list_amenity_college"]="Colleges";
#    $lang_str["list_amenity_school"]="Schools";
#    $lang_str["list_amenity_preschool"]="Preschools";
#    $lang_str["list_amenity_kindergarten"]="Kindergartens";
#    $lang_str["list_amenity_library"]="Libraries";
#    $lang_str["list_shop_books"]="Book Shops";

#  $lang_str["list_historic"]="Historic Places";
#    $lang_str["list_historic_monument"]="Monuments";
#    $lang_str["list_historic_castle"]="Castles";
#    $lang_str["list_historic_ruins"]="Ruins";
#    $lang_str["list_historic_icon"]="Icons";
#    $lang_str["list_historic_memorial"]="Memorial Sites";
#    $lang_str["list_historic_archaeological_site"]="Archaelogical Sites";
#    $lang_str["list_historic_unesco_world_heritage"]="UNESCO World Heritage Sites";
#    $lang_str["list_historic_UNESCO_world_heritage"]="UNESCO World Heritage Sites";
#    $lang_str["list_historic_battlefield"]="Battlefields";
#    $lang_str["list_historic_wreck"]="Wrecks";
#    $lang_str["list_historic_wayside_cross"]="Wayside Crosses";
#    $lang_str["list_historic_wayside_shrine"]="Wayside Shrines";

#  $lang_str["list_religion"]="Religion";
#    $lang_str["list_amenity_place_of_worship"]="Places of Worship";
#    $lang_str["list_amenity_grave_yard"]="Grave Yards";
#    $lang_str["list_landuse_cemetery"]="Cemeteries";
#    $lang_str["list_amenity_crematorium"]="Crematoriums";
#    $lang_str["list_cemetery_grave"]="Graves";
#    $lang_str["list_amenity_grave"]="Graves";

#$lang_str["list_services"]="Services";
#  $lang_str["list_health"]="Health";
#    $lang_str["list_amenity_hospital"]="Hospitals";
#    $lang_str["list_amenity_doctor"]="Doctors";
#    $lang_str["list_amenity_doctors"]="Doctors";
#    $lang_str["list_amenity_dentist"]="Dentists";
#    $lang_str["list_amenity_pharmacy"]="Pharmacies";
#    $lang_str["list_amenity_veterinary"]="Veterinaries";
#    $lang_str["list_amenity_red_cross"]="Ambulance Services";
#    $lang_str["list_amenity_baby_hatch"]="Baby Hatch";

#  $lang_str["list_public"]="Public Services";
#    $lang_str["list_amenity_townhall"]="Townhalls";
#    $lang_str["list_amenity_public_building"]="Public Buildings";
#    $lang_str["list_amenity_fire_station"]="Fire Stations";
#    $lang_str["list_amenity_police"]="Police Stations";
#    $lang_str["list_amenity_embassy"]="Embassies";
#    $lang_str["list_amenity_courthouse"]="Court Houses";
#    $lang_str["list_amenity_prison"]="Prisons";

#  $lang_str["list_communication"]="Communication";
#    $lang_str["list_amenity_telephone"]="Telephones";
#    $lang_str["list_amenity_emergency_phone"]="Emergency Phones";
#    $lang_str["list_amenity_post_office"]="Post Offices";
#    $lang_str["list_amenity_post_box"]="Post Boxes";
#    $lang_str["list_amenity_wlan"]="WLAN Accesspoints";
#    $lang_str["list_amenity_WLAN"]="WLAN Accesspoints";

#  $lang_str["list_disposal"]="Disposal";
#    $lang_str["list_amenity_recycling"]="Recyclings Centres";
#    $lang_str["list_amenity_toilets"]="Toilets";
#    $lang_str["list_amenity_waste_disposal"]="Waste Disposals";

#$lang_str["list_transport"]="Transportation";
#  $lang_str["list_car_motorcycle"]="Car and Motorcycle";
#    $lang_str["list_amenity_fuel"]="Fuel Stations";
#    $lang_str["list_amenity_car_rental"]="Car Rentals";
#    $lang_str["list_amenity_car_sharing"]="Car Sharings";
#    $lang_str["list_amenity_parking"]="Parkings";
#    $lang_str["list_shop_car"]="Car Shop";
#    $lang_str["list_shop_car_repair"]="Car Repair";

#  $lang_str["list_pt_amenities"]="Public Transport amenities";
#    $lang_str["list_amenity_taxi"]="Taxi Stations";
#    $lang_str["list_amenity_ticket_counter"]="Ticket Counter";

#  $lang_str["list_pt_stops"]="Public Transport stops";
#  $lang_str["list_pt_routes"]="Public Transport routes";

#  $lang_str["list_pipes"]="Goods (Pipes, Power, ...)";
#    $lang_str["list_power_line"]="Power lines";
#    $lang_str["list_man_made_pipeline"]="Pipelines";

#$lang_str["list_places"]="Places";
#  $lang_str["list_streets"]="Street Directory";
#  $lang_str["list_nature_recreation"]="Nature &amp; Recreation";
#    $lang_str["list_leisure_park"]="Parks";
#    $lang_str["list_leisure_nature_reserve"]="Nature Reserves";
#    $lang_str["list_leisure_common"]="Commons";
#    $lang_str["list_leisure_garden"]="Gardens";
#  $lang_str["list_natural"]="Natural Formations";
#    $lang_str["list_natural_peaks"]="Peaks";
#    $lang_str["list_natural_spring"]="Springs";
#    $lang_str["list_natural_glacier"]="Glaciers";
#    $lang_str["list_natural_volcano"]="Volcanos";
#    $lang_str["list_natural_cliff"]="Cliffs";
#    $lang_str["list_natural_scree"]="Screes";
#    $lang_str["list_natural_fell"]="Fells";
#    $lang_str["list_natural_heath"]="Heaths";
#    $lang_str["list_natural_wood"]="Woods";
#    $lang_str["list_landuse_forest"]="Forests";
#    $lang_str["list_natural_marsh"]="Marshes";
#    $lang_str["list_natural_wetland"]="Wetland";
#    $lang_str["list_natural_water"]="Lakes, etc.";
#    $lang_str["list_natural_beach"]="Beaches";
#    $lang_str["list_natural_bay"]="Bays";
#    $lang_str["list_natural_land"]="Islands";
#    $lang_str["list_natural_cave_entrance"]="Cave Entrances";
#    $lang_str["list_natural_tree"]="Trees";

#$lang_str["list_industry"]="Industry";
#$lang_str["list_power"]="Power";
#  $lang_str["list_power_generator"]="Power Generators";
#  $lang_str["list_power_station"]="Power Stations";
#  $lang_str["list_power_sub_station"]="Power Substations";
#$lang_str["list_works"]="Works";
#  $lang_str["list_landuse_industrial"]="Industrial Areas";
#  $lang_str["list_man_made_works"]="Works";

#$lang_str["route_international"]="International Routes";
#$lang_str["route_national"]="National Routes";
#$lang_str["route_region"]="Regional Routes";
#$lang_str["route_urban"]="Urban Routes";
#$lang_str["route_suburban"]="Suburban Routes";
#$lang_str["route_local"]="Local Routes";
#$lang_str["route_no"]="No routes found";
#$lang_str["route_zoom"]="Zoom in for list of routes";

#$lang_str["station_type_amenity_bus_station"]="Bus Station";
#$lang_str["station_type_amenity_ferry_terminal"]="Ferry Terminal";
#$lang_str["station_type_highway_bus_stop"]="Bus Stop";
#$lang_str["station_type_railway_tram_stop"]="Tram Stop";
#$lang_str["station_type_railway_station"]="Railway Station";
#$lang_str["station_type_railway_halt"]="Railway Halt";
// ATTENTION: the last >400 language strings are deprecated

