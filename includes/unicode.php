<?php


// unicodifier translating list 
// notice: some characters may seem double, but they ARE different codes. 

$arrChars = array();

$arrChars['a'] = array('à', 'á', 'â', 'ä', 'ã', 'ǻ', 'ȁ', 'ȃ', 'ǡ', 'ǟ', 'ǎ', 'ą', 'ā', 'ȧ', 'ά', 'α', 'а', 'ᴀ', 'ἀ', 'ἁ', 'ἂ', 'ἃ', 'ἄ', 'ἅ', 'ἆ', 'ἇ', 'ὰ', 'ά', 'ᾰ', 'ᾱ', 'ᾲ', 'ᾳ', 'ᾴ', 'ᾶ', 'ᾷ', '₳', 'ａ', 'ɑ', 'Á');
$arrChars['b'] = array('ɓ', 'в', 'ᴮ', 'ᴯ', 'ᵇ', 'ḃ', 'ḅ', 'ḇ', 'ｂ', 'Ꮟ', 'ᑲ', 'ᑳ', 'ᑾ', 'ᑿ', 'ᒀ', 'ᒁ', 'ᒂ', 'ᒃ', 'ᒈ', 'ߕ');
$arrChars['c'] = array('ç', 'ć', 'ĉ', 'ċ', 'č', 'ƈ', 'ɔ', 'ς', 'ϲ', 'с', 'ҫ', 'ᴄ', 'ḉ', 'ｃ');
$arrChars['d'] = array('ď', 'đ', 'Ƌ', 'ƌ', 'ɖ', 'ɗ', 'δ', 'ժ', 'Ꮄ', 'ᑯ', 'ᑰ', 'ᑱ', 'ᑺ', 'ᑻ', 'ᑼ', 'ᑽ', 'ᒇ', 'ᒄ', 'ᗞ', 'ᗟ', 'ᗠ', 'ᗤ', 'ᗥ', 'ᗦ', 'ᗪ', 'ᗫ', 'ᗬ', 'ᵈ', 'ᶛ', 'ḋ', 'ḍ', 'ḏ', 'ḑ', 'ḓ', '₫', 'ｄ');
$arrChars['e'] = array('è', 'é', 'ê', 'ë', 'ē', 'ĕ', 'ė', 'ę', 'ě', 'ȅ', 'ȇ', 'ȩ', 'ɛ', 'έ', 'ϵ', 'е', 'ѐ', 'ё', 'є', 'ԑ', 'Ԑ', 'Ҽ', 'ҽ', 'Ҿ', 'ҿ', 'ᗴ', 'ᴱ', 'ᵉ', 'ḕ', 'ḗ', 'ḙ', 'ḛ', 'ḝ', 'ẹ', 'ẻ', 'ẽ', 'ế', 'ề', 'ể', 'ễ', 'ệ', 'ὲ', 'έ', 'ₑ', '℮', '∈', 'ｅ', '3');
$arrChars['f'] = array('ſ', 'Ƒ', 'ƒ', 'ƭ', 'ϝ', 'ғ', 'բ', 'ߓ', 'ᖴ', 'ḟ', '₣', 'ｆ');
$arrChars['g'] = array('ĝ', 'ğ', 'ġ', 'ģ', 'ǥ', 'ǧ', 'ɡ', 'ɢ', 'ʛ', 'ԍ', 'ց', 'ḡ', '₲', 'ｇ');
$arrChars['h'] = array('ĥ', 'ħ', 'ȟ', 'ɦ', 'ɧ', 'ʜ', 'н', 'ђ', 'ћ', 'ң', 'ҥ', 'һ', 'ӈ', 'ӊ', 'հ', 'ḣ', 'ḥ', 'ḧ', 'ḩ', 'ḫ', 'ⱨ', 'ｈ');
$arrChars['i'] = array('ì', 'í', 'î', 'ï', 'ĩ', 'ī', 'ĭ', 'į', 'ı', 'Ɩ', 'Ɨ', 'ǐ', 'ȉ', 'ȋ', 'ɨ', 'ɩ', 'ɪ', 'ί', 'ι', 'ϊ', 'і', 'ї', 'ᒐ', 'ᒑ', 'ᒞ', 'ᒟ', 'ḭ', 'ḯ', 'ỉ', 'ị', 'ἰ', 'ἱ', 'ἲ', 'ἳ', 'ἴ', 'ἵ', 'ἶ', 'ἷ', 'ὶ', 'ί', 'ῐ', 'ῑ', 'ῒ', 'ΐ', 'ῖ', 'ῗ', 'ｉ', 'Ì');
$arrChars['j'] = array('ĵ', 'ǰ', 'ɉ', 'ɟ', 'ʝ', 'ϳ', 'ј', 'յ', 'ᒍ', 'ᒎ', 'ᒏ', 'ᒘ', 'ᒙ', 'ᒚ', 'ᒛ', 'ᒴ', 'ᒵ', 'ᴊ', 'ｊ');
$arrChars['k'] = array('ķ', 'ĸ', 'Ƙ', 'ƙ', 'ǩ', 'ɮ', 'κ', 'к', 'ќ', 'қ', 'ҝ', 'ҟ', 'ҡ', 'ӄ', 'ᴋ', 'ḱ', 'ḳ', 'ḵ', 'ｋ');
$arrChars['l'] = array('ĺ', 'ļ', 'ľ', 'ŀ', 'ł', 'ƚ', 'ȴ', 'ɫ', 'ɬ', 'ɭ', 'ʟ', 'լ', 'ᒶ', 'ᒷ', 'ᒺ', 'ᴌ', 'ḹ', 'ḷ', 'ḽ', 'ｌ');
$arrChars['m'] = array('ɱ', 'ʍ', 'ϻ', 'м', 'ӎ', 'ᗰ', 'ᘻ', 'ᙏ', 'ᙢ', 'ᴍ', 'ḿ', 'ṁ', 'ṃ', '₥', 'ｍ');
$arrChars['n'] = array('ñ', 'ń', 'ņ', 'ň', 'ŉ', 'ŋ', 'Ɲ', 'ƞ', 'ǹ', 'ȵ', 'ɲ', 'ɳ', 'ɴ', 'ή', 'η', 'դ', 'ղ', 'ո', 'ռ', 'ṅ', 'ṇ', 'ṉ', 'ṋ', 'ἠ', 'ἡ', 'ἢ', 'ἣ', 'ἤ', 'ἥ', 'ἦ', 'ἧ', 'ὴ', 'ή', 'ᾐ', 'ᾑ', 'ᾒ', 'ᾓ', 'ᾔ', 'ᾕ', 'ᾖ', 'ᾗ', 'ῂ', 'ῃ', 'ῄ', 'ῆ', 'ῇ', 'ｎ');
$arrChars['o'] = array('ò', 'ó'.'ô', 'õ', 'ö', 'ø', 'ō', 'ŏ', 'ő', 'ǒ', 'ǫ', 'ǭ', 'ǿ', 'ȍ', 'ȏ', 'ȫ', 'ȭ', 'ȯ', 'ȱ', 'ο', 'σ', 'ό', 'ϐ', 'ϙ', 'о', 'ѻ', 'ᴏ', 'ṍ', 'ṏ', 'ṑ', 'ṓ', 'ọ', 'ỏ', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'ὀ', 'ὁ', 'ὂ', 'ὃ', 'ὄ', 'ὅ', 'ὸ', 'ό', 'ｏ', 'Ò', 'Ó', 'Ö', '0');
$arrChars['p'] = array('ƿ', 'ρ', 'ϼ', 'р', 'ҏ', 'ᑬ', 'ᑭ', 'ᑮ', 'ᑶ', 'ᑷ', 'ᑸ', 'ᑹ', 'ᴩ', 'ṕ', 'ṗ', 'ῤ', 'ῥ', '₱', 'ｐ');
$arrChars['q'] = array('ɋ', 'ԛ', 'գ', 'զ', 'ᑫ', 'ᑴ', 'ᑵ', 'ᒅ', 'ｑ');
$arrChars['r'] = array('ŕ', 'ŗ', 'ř', 'ȑ', 'ȓ', 'ɍ', 'ʀ', 'ѓ', 'ґ', 'ṙ', 'ṛ', 'ṝ', 'ṟ', 'ｒ');
$arrChars['s'] = array('ś', 'ŝ', 'ş', 'š', 'ș', 'ȿ', 'ѕ', 'ṡ', 'ṣ', 'ṥ', 'ṧ', 'ṩ', 'ｓ', '$', '5');
$arrChars['t'] = array('ţ', 'ť', 'ŧ', 'ț', 'ȶ', 'ʈ', 'τ', 'т', 'ҭ', 'ե', 'է', 'ṫ', 'ṭ', 'ṯ', 'ṱ', 'ẗ', 'ⱦ', 'ｔ', '+');
$arrChars['u'] = array('ù', 'ú', 'û', 'ü', 'ũ', 'ū', 'ŭ', 'ů', 'ű', 'ų', 'ư', 'ǔ', 'ǖ', 'ǘ', 'ǚ', 'ǜ', 'ȕ', 'ȗ', 'ʊ', 'ʋ', 'ΰ', 'μ', 'υ', 'ϋ', 'ύ', 'մ', 'ն', 'ս', 'ṳ', 'ṵ', 'ṷ', 'ṹ', 'ṻ', 'ụ', 'ủ', 'ứ', 'ừ', 'ử', 'ữ', 'ự', 'ὐ', 'ὑ', 'ὒ', 'ὓ', 'ὔ', 'ὕ', 'ὖ', 'ὗ', 'ὺ', 'ύ', 'ῠ', 'ῡ', 'ῢ', 'ΰ', 'ῦ', 'ῧ', 'ｕ');
$arrChars['v'] = array('ν', 'ѵ', 'ѷ', 'ᴠ', 'ṽ', 'ṿ', 'ⱱ', 'ｖ');
$arrChars['w'] = array('ŵ', 'Ɯ', 'ɯ', 'ʷ', 'ω', 'ώ', 'ѡ', 'ѿ', 'ԝ', 'ա', 'ᗯ', 'ᘺ', 'ᙎ', 'ᙡ', 'ᴡ', 'ẁ', 'ẃ', 'ẅ', 'ẇ', 'ẉ', 'ẘ', 'ὠ', 'ὡ', 'ὢ', 'ὣ', 'ὤ', 'ὥ', 'ὦ', 'ὧ', 'ὼ', 'ώ', 'ᾠ', 'ᾡ', 'ᾢ', 'ᾣ', 'ᾤ', 'ᾥ', 'ᾦ', 'ᾧ', 'ῲ', 'ῳ', 'ῴ', 'ῶ', 'ῷ', 'ⱳ', 'ｗ');
$arrChars['x'] = array('×', 'χ', 'х', 'ҳ', 'ӽ', 'ẋ', 'ẍ', 'ｘ');
$arrChars['y'] = array('ý', 'ÿ', 'ŷ', 'ƴ', 'ȳ', 'ɏ', 'ɣ', 'ʏ', 'ʸ', 'у', 'ў', 'ү', 'ұ', 'ӯ', 'ӱ', 'ӳ', 'ẏ', 'ẙ', 'ỳ', 'ỵ', 'ỷ', 'ỹ', 'ｙ');
$arrChars['z'] = array('ź', 'ż', 'ž', 'ƶ', 'ɀ', 'ʐ', 'ʑ', 'ᴢ', 'ẑ', 'ẓ', 'ẕ', 'ⱬ', 'ｚ');
$arrChars['.'] = array(',', ';', ':');
