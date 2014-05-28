<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => "Diese Checkbox muss akzeptiert werden.",
	"active_url"     => "Eingabefeld ist keine g&uuml;ltige URL.",
	"after"          => "Eingabefeld muss ein Datum nach dem :date sein.",
	"alpha"          => "Eingabefeld darf nur Buchstaben beinhalten.",
	"alpha_dash"     => "Eingabefeld sollte nur aus Buchstaben, Nummern und Bindestrichen bestehen.",
	"alpha_num"      => "Eingabefeld sollte nur aus Buchstaben und Nummern bestehen.",
	"array"          => "The :attribute must have selected elements.",
	"before"         => "Eingabefeld muss ein Datum vor dem :date sein.",
	"between"        => array(
		"numeric" => "Eingabefeld muss zwischen :min und :max liegen.",
		"file"    => "Eingabefeld muss zwischen :min und :max Kilobytes gro&szlig; sein.",
		"string"  => "Eingabefeld muss zwischen :min und :max Zeichen lang sein.",
	),
	"confirmed"      => "Eingabefeld stimmt nicht mit der Best&auml;tigung &uuml;berein.",
	"count"          => "The :attribute must have exactly :count selected elements.",
	"countbetween"   => "The :attribute must have between :min and :max selected elements.",
	"countmax"       => "The :attribute must have less than :max selected elements.",
	"countmin"       => "The :attribute must have at least :min selected elements.",
	"different"      => "Eingabefeld und :other m&uuml;ssen verschieden sein.",
	"email"          => "Eingabefeld ist keine g&uuml;ltige Email-Adresse.",
	"exists"         => "Der gew&auml;hlte Wert f&uuml;r :attribute ist ung&uuml;ltig.",
	"image"          => "Eingabefeld muss ein Bild sein.",
	"in"             => "Der gew&auml;hlte Wert f&uuml;r :attribute ist ung&uuml;ltig.",
	"integer"        => "Eingabefeld muss eine ganze Zahl sein.",
	"ip"             => "Eingabefeld muss eine g&uuml;ltige IP-Adresse sein.",
	"match"          => "Eingabefeld hat ein ung&uuml;ltiges Format.",
	"max"            => array(
		"numeric" => "Eingabefeld muss kleiner als :max sein.",
		"file"    => "Eingabefeld muss kleiner als :max Kilobytes gro&szlig; sein.",
		"string"  => "Eingabefeld muss k&uuml;rzer als :max Zeichen sein.",
	),
	"mimes"          => "Eingabefeld muss den Dateityp :values haben.",
	"min"            => array(
		"numeric" => "Eingabefeld muss gr&ouml;&szlig;er als :min sein.",
		"file"    => "Eingabefeld muss gr&ouml;&szlig;er als :min Kilobytes gro&szlig; sein.",
		"string"  => "Eingabefeld muss l&auml;nger als :min Zeichen sein.",
	),
	"not_in"         => "Der gew&auml;hlte Wert f&uuml;r :attribute ist ung&uuml;ltig.",
	"numeric"        => "Eingabefeld muss eine Zahl sein.",
	"required"       => "Eingabefeld muss aufgef&uuml;llt sein.",
	"same"           => "Eingabefeld und :other m&uuml;ssen &uuml;bereinstimmen.",
	"size"           => array(
		"numeric" => "Eingabefeld muss gleich :size sein.",
		"file"    => "Eingabefeld muss :size Kilobyte gro&szlig; sein.",
		"string"  => "Eingabefeld muss :size Zeichen lang sein.",
	),
	"unique"         => "Eingabefeld ist schon vergeben.",
	"url"            => "Das Format von :attribute ist ung&uuml;ltig.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);