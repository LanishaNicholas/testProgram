<?php
 
require 'vendor/autoload.php';
require 'src/OpenAi.php';
require 'src/Url.php';
use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAi('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');
//$prompt = $_GET['prompt'];


//$client = OpenAI::client('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');

$prompt = <<<TEXT
	Tittel: Klovner på Svalbard: En fargerik og kulturell undervisningsartikkel
	Svalbard, en øygruppe i Arktis, er kanskje mest kjent for sin villmark, sitt dyreliv og sinepolarekspedisjoner. Men det er også et sted hvor kultur og underholdning trives, og klovnerhar spilt en spesiell rolle i Svalbards kulturelle landskap. Denne undervisningsartikkelen tarfor seg historien, betydningen og kunsten bak klovneriet i Svalbard, og gir en innføring ihvordan denne særegne underholdningsformen har utviklet seg på øygruppen.Klovneriets historie i Svalbard kan spores tilbake til tidlige europeiske oppdagelsesreisende og hvalfangere som kom til øygruppen på 1600- og 1700-tallet. Disse sjøfolkene brakte medseg ulike kulturelle uttrykk, og klovneriet ble introdusert som en form for underholdning forå bryte opp monotonien i det isolerte arktiske livet. Klovneforestillinger ble derfor en viktigsosial aktivitet og et middel for samhold blant de tidlige bosetterne.Klovneriet har hatt en spesiell betydning for Svalbard, da det har fungert som et kultureltbindeledd mellom folk fra forskjellige nasjonaliteter og bakgrunner som har bosatt seg på øygruppen. Gjennom humor, slapstick og fysiske krumspring har klovner vært i stand til å formidle historier og budskap som har krysset språk- og kulturgrenser. Dette har bidratt tilå skape en felles identitet og et kulturelt fellesskap for Svalbards innbyggere.I dag er klovneriet en integrert del av Svalbards kulturelle landskap, og det finnes en rekke organiserte grupper og ensembler som fremfører klovneforestillinger både lokalt og internasjonalt. Klovner i Svalbard er også engasjert i ulike sosiale og miljømessige initiativer, som bidrar til å styrke samfunnet og øke bevisstheten rundt øygruppens unike utfordringer.Klovneriet i Svalbard er et levende og mangfoldig kulturelt fenomen som har en lang historie og en dyp betydning for øygruppens innbyggere. Klovner har ikke bare fungert som underholdere, men også som kulturelle brobyggere og samfunnsengasjerte aktører. Ved å lære om klovner i Svalbard, får vi et unikt innblikk i et samfunn som har klart å forene ulike kulturer og tradisjoner gjennom kunsten og kraften av humor.
TEXT;

$complete = $open_ai->completion(
    // object with all parameters
	[
    'model' => 'text-davinci-003',
    'prompt' => $prompt,
    'temperature' => 0.7,
    'max_tokens' => 256,
    'top_p' => 1,
    'frequency_penalty' => 0,
    'presence_penalty' => 0,
    'stream' => true
	]

, function($curl_info, $data){
    // response
	echo $data;
	//echo PHP_EOL;
	//ob_flush();
	//flush();
	//return strlen($data);

});

/*$result = $client->completions()->create([
    'model' => 'text-davinci-003', // The most expensive one, but the best.
    'prompt' => $prompt,
]);*/
 
//echo $result['choices'][0]['text'];