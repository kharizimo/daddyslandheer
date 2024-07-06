<?php 
class Vars{
    public static $mois_fr=['01'=>'Janvier','02'=>'Février','03'=>'Mars','04'=>'Avril','05'=>'Mai','06'=>'Juin','07'=>'Juillet','08'=>'Aout','09'=>'Septembre','10'=>'Octobre','11'=>'Novembre','12'=>'Décembre'];
    public static $mois_en=['01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December'];
    public static $groupe_sanguin=['A+','A-','B+','B-','AB+','AB-','O+','O-'];
    public static $provinces_rdc=["BAS-UELE", "ÉQUATEUR", "HAUT-KATANGA", "HAUT-LOMAMI", "HAUT-UELE", "ITURI", "KASAI", "KASAI-CENTRAL", "KASAI-ORIENTAL", "KINSHASA", "KONGO-CENTRAL", "KWANGO", "KWILU", "LOMAMI", "LUALABA", "MAI-NDOMBE", "MANIEMA", "MONGALA", "NORD-KIVU", "NORD-UBANGI", "SANKURU", "SUD-KIVU", "SUD-UBANGI", "TANGANYIKA", "TSHOPO", "TSHUAPA"];
    public static $pays_fr=array("Afghanistan", "Albanie", "Algérie", "Samoa américaines", "Andorre", "Angola", "Anguilla", "Antarctique", "Antigua-et-Barbuda", "Argentine", "Arménie", "Aruba", "Australie", "Autriche", "Azerbaïdjan", "Bahamas", "Bahreïn", "Bangladesh", "Barbade", "Biélorussie", "Belgique", "Belize", "Bénin", "Bermudes", "Bhoutan", "Bolivie", "Bosnie-Herzégovine", "Botswana", "Île Bouvet", "Brésil", "Territoire britannique de l'océan Indien", "Brunei Darussalam", "Bulgarie", "Burkina Faso", "Burundi", "Cambodge", "Cameroun", "Canada", "Cap-Vert", "Îles Caïmans", "République Centrafricaine", "Tchad", "Chili", "Chine", "Christmas Island", "Cocos (Keeling )", "Colombie", "Comores", "République du Congo", "République Démocratique du Congo", "Îles Cook", "Costa Rica", "Côte d'Ivoire", "Croatie (Hrvatska)", "Cuba", "Chypre", "République tchèque", "Danemark", "Djibouti", "Dominique", "République dominicaine", "Timor oriental", "Équateur", "Égypte", "El Salvador", "Guinée Équatoriale","Erythrée", "Estonie", "Ethiopie", "Iles Falkland (Malvinas)", "Îles Féroé", "Fidji", "Finlande", "France", "France métropolitaine", "Guyane française", "Polynésie française", "Terres australes françaises", "Gabon", "Gambie" , "Géorgie", "Allemagne", "Ghana", "Gibraltar", "Grèce", "Groenland", "Grenade", "Guadeloupe", "Guam", "Guatemala", "Guinée", "Guinée-Bissau", "Guyane", "Haïti", "Îles Heard et Mc Donald", "État de la Cité du Vatican Saint-Siège", "Honduras", "Hong Kong", "Hongrie", "Islande", "Inde", "Indonésie", "République islamique d'Iran", "Irak", "Irlande", "Israël", "Italie", "Jamaïque", "Japon", "Jordanie", "Kazakhstan", "Kenya", "Kiribati", "République populaire démocratique de Corée", "République de Corée", "Koweït", "Kirghizistan", "République démocratique populaire Lao", "Lettonie", "Liban", "Lesotho", "Libéria", "Jamahiriya arabe libyenne", "Liechtenstein", "Lituanie", "Luxembourg", "Macao", "l'ex-République yougoslave de Macédoine", "Madagascar", "Malawi", "Malaisie", "Maldives", "Mali", "Malte", "Iles Marshall", "Martinique", "Mauritanie", "Maurice", "Mayotte", "Mexique", "États fédérés de Micronésie", "République de Moldavie", "Monaco", "Mongolie", "Montserrat", "Maroc", "Mozambique", "Myanmar" , "Namibie", "Nauru", "Népal", "Pays-Bas", "Antilles néerlandaises", "Nouvelle-Calédonie", "Nouvelle-Zélande", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Iles Mariannes du Nord", "Norvège", "Oman", "Pakistan", "Palaos", "Panama", "Papouasie-Nouvelle-Guinée", "Paraguay", "Pérou", "Philippines", "Pitcairn", "Pologne", "Portugal", "Porto Rico", "Qatar", "Réunion", "Roumanie", "Fédération de Russie", "Rwanda", "Saint-Kitts-et-Nevis", "Sainte-Lucie", "Saint-Vincent et les Grenadines", "Samoa", "Saint-Marin", "Sao Tomé", "Arabie saoudite", "Sénégal", "Seychelles", "Sierra Leone", "Singapour", "Slovaquie (République slovaque)" , "Slovénie", "Îles Salomon", "Somalie", "Afrique du Sud", "Géorgie du Sud et îles Sandwich du Sud", "Espagne", "Sri Lanka", "St. Hélène", "St. Pierre et Miquelon", "Soudan", "Suriname", "Îles Svalbard et Jan Mayen", "Swaziland", "Suède", "Suisse", "République arabe syrienne", "Taïwan", "Tadjikistan" , "Tanzanie", "Thaïlande", "Togo", "Tokelau", "Tonga", "Trinité-et-Tobago", "Tunisie", "Turquie", "Turkménistan", "Îles Turques et Caïques", "Tuvalu", "Ouganda", "Ukraine", "Émirats arabes unis", "Royaume-Uni", "États-Unis", "Îles mineures éloignées des États-Unis", "Uruguay", "Ouzbékistan", "Vanuatu", "Venezuela", "Vietnam", "Îles Vierges (britanniques)", "Îles Vierges (États-Unis)", "Îles Wallis et Futuna", "Sahara occidental", "Yémen", "Yougoslavie", "Zambie", "Zimbabwe");
    public static $pays_en=array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

    public static $aeroports=["748 Air Services","ABSA Cargo Airline","Adria Airways","Aegean Airlines","Aer Lingus","Aeroflot","Aerolineas Argentinas","Aerolineas Galapagos S.A. Aerogal","Aerolink","Aerolnk (UG)","Aeromexico","Aeronav","Aero Rep£blica","Africa Born Ltd","African Express","African Sky Charters","Afriqiyah Airways","Aigle Azur","AIM AIR","Air Algerie","Air Arabia","Air Astana","Air Austral","Air Baltic","Air Berlin","Air Botswana","AirBridgeCargo Airlines","Air Caledonie","Aircalin","Air Canada","Air China Limited","Air Corsica","Aircraft Leasing Services","Aircraft Leasing Services (ALS)","Air Europa","Air France","Air India","Air Kenya","Airkenya Express","Air Koryo","Air Lamu","Airlink","Air Macau","Air Madagascar","Air Malta","Air Mauritius","Air Moldova","Air Namibia","Air New Zealand","Air Niugini","Air Nostrum","Air One S.p.A.","Air SERBIA a.d. Beograd","Air Seychelles","Airspray Kenya LTD","Air Tahiti","Air Tahiti Nui","Air Tanzania","Air Traffic","Air Transat","Air Vanuatu","Airworls Kenya Ltd","Alaska Airlines","Alitalia","All Nippon Airways","AlMasria Universal Airlines","ALS","American Airlines","AMREF","Arik Air","Arkia Israeli Airlines","Asiana","Asia Pacific Airlines","Astral Aviation","Atlas Air","Atlasjet Airlines","Auric","Austral","Austrian","AVIANCA","Avianca Brasil","Azerbaijan Airlines","Bangkok Air","Batian Craig","Bayline","Belavia - Belarusian Airlines","BH AIR","B&amp;H Airlines","Biman","Binter Canarias","Blue1","Bluebird Aviation","Bluebird Aviation","Blue Panorama","Blue Sky Aviation Services","BMI Regional","Bob Andersen","Boliviana de Aviaci¢n - BoA","British Airways","Brussels Airlines","Bryn Llewelyn","Bulgaria air","C.A.L. Cargo Airlines","Capital Airlines","Capital Connect av","Cargojet Airways","Cargolux S.A.","Caribbean Airlines","Carpatair","Cathay Pacific","Chartered Flight","China Airlines","China Cargo Airlines","China Eastern","China Postal Airlines","China Southern Airlines","CityJet","Coastal Aviation","Comair","Condor","COPA Airlines","Corendon Airlines","Corsair International","Croatia Airlines","Cubana","Cyprus Airways","Czech Airlines j.s.c","Daalo Airlines","DAC Aviation","Dalo airline","Delta Air Lines","DHL Air","DHL Aviation EEMEA B.S.C.(c)","Donavia","Dragonair","EAA Charters","EASAX","East African Safari Air","Egyptair","EL AL","Emirates","Estonian Air","Ethiopian Airlines","Etihad Airways","Euroatlantic Airways","European Air Transport","Eurowings","EVA Air","Everett Aviation","Excel Aviation","Farmland Aviation","Federal Express","Fiji Airways","Finnair","Flight Link","Fly 540","Flybe","Flying Medical Services","Fredon Airline Express","Freebird Airlines","Freedom Air","Garuda","Georgian Airways","Gerard Beaton","Germania","Governors Aviation Limited","Grumeti","Gulf Air","Guy Douglas Jack","Hahn Air","Hainan Airlines","Hamco Aviation","Hawaiian Airlines","heliprops","Hi Fly","Hong Kong Airlines","Hong Kong Express Airways","IBERIA","Icelandair","InselAir","Interair","InterSky","Iran Air","Iran Aseman Airlines","Israir","Jambojet","Japan Airlines","Jazeera Airways","Jeremy  Bastard","Jet Airways","JetBlue","Jet Lite (India) Limited","Jetways","Jetways Airline","Jordan Aviation","J.P Barclay","JSC Aircompany Yakutia","JSC Nordavia-RA","Juneyao Airlines","KARSTAD","Kassas LTD","Kenya Airways","Kenya School of Flying","Kish Air","KLM","Korean Air","Kuwait Airways","Kwae Island Dev","LACSA","Lady Lori","Lalela Ltd","LAM","Lan Airlines","Lan Argentina","Lan Cargo","LanEcuador","Lan Per£","Lapwig ltd","LIAT Airlines","Libyan Airlines","LLC &quot;NORD WIND&quot;","lord Valentine Cecil","LOT Polish Airlines","Luca Safaris","Lufthansa","Lufthansa Cargo","Lufthansa CityLine","Luxair","Mahan Air","Malaysia Airlines","Malm” Aviation","Martinair Cargo","MAS AIR","MEA","Meridiana fly","MIAT","Michael Dyer","Mission Aviation Fellowship","Mission Aviation Fellowship","Mission Aviation Fellowship","Mombasa Air Safari","Mombasa Air Safaris","Montenegro Airlines","Muhwai Ltd","Nesma Airlines","NIKI","Nile Air","Nippon Cargo Airlines (NCA)","Northwood","Nouvelair","Olympic Air","Oman Air","Onur Air","Other","PAL","Pegasus Airlines","Pegasus Flyers EA LTD","Penial Air Limited","Peter Boeheim","Pfeffer","PGA-Portug lia Airlines","Phoenix Aviation","PIA","Pick N Carry","Precision Air","Prime Aviation","PrivatAir","Pro-Flight","Qantas","Qatar Airways","Renegade Air Limited","Richard Lyon","Rift Valley Aviation","Riverclose Management Ltd","Rossiya Airlines","Royal Air Maroc","Royal Brunei","Royal Jordanian","Rudufu","Rwandair","SAA","Safair","Safarilink","Safarilink Aviation Ltd","Safi Airways","Sandpiper Aviation Ltd","Sanyati LTD","SAS","SATA Air A‡ores","SATA Internacional","Saudi Arabian Airlines","Saunders Safaris Limited","Shandong Airlines","Shanghai Airlines","Shenzhen Airlines","SIA","SIA Cargo","Siberia Airlines","Sicham","Sichuan Airlines","Silkair","Silk Way Airlines","Silk Way West Airlines Limited","Silverstone Air","Skyward","Skyward Express","South African Express Airways","SriLankan","Stuart Herd","Sudan Airways","SunExpress","Surinam Airways","SVT 748 Air Services","SWISS","SYPHAX AIRLINES","Syrianair","TAAG - Angola Airlines","TACA","TACA Peru","TACV Cabo Verde Airlines","TAME - Linea A‚rea del Ecuador","Tamimi E.A LTD","TAM Linhas A‚reas","TAM - Transportes A‚reos del Mercosur Sociedad An¢nima","TAP Portugal","TAROM","Tarquin Wood","Tassili Airlines","Teita Estate","Thai Airways International","THY - Turkish Airlines","Tianjin Airlines","Timbis Air Services","TNT Airways S.A.","Toby Selman &amp; Nicholas Sadron","Transaero","TransAsia Airways","Transavia Export","Tropical Air Kenya","TuIfly","Tunisair","Twinstar","Udaan Limited","Uganda Airlines","Ukraine International Airlines","United Airlines","UPS Airlines","US Airways","UTair","Uzbekistan Airways","Valentine Air Services Limited","Ventura Aviation","Vietnam Airlines","Virgin Atlantic","Virgin Australia","VLM Airlines","Volaris","Volga-Dnepr Airlines","VRG Linhas Areas S.A. - Grupo GOL","White coloured by you","Wideroe","Wild Coast Air Safaris LTD","Wilderness Trials","Wilken Aviation LTD","Xiamen Airlines","Yellowings Airline","Yemenia","Youth Aviation","Z. Boskovic",];
}