<?php 

namespace App\Services;

class FolderService
{

	//private $repository;
	//private $validator;

	public function __construct(){

	}

	static public function checkDateFolder($conditionPage){

		$data = date('d');

		// Lista de Folder Disponiveis
		$folder1 = "beijinhoCoco.jpg";
		$folder2 = "boloConfeitado.jpg";
		$folder3 = "caldoVerde.jpg";
		$folder4 = "dadinhoChocoCoco.jpg";
		$folder5 = "mousseMaracuja.jpg";
		$folder6 = "raspadinhaMorango.jpg";
		$folder7 = "tortaMorango.png";

		$folderArray = array();
		$condArray = null;

			/* Verificar de qual pagina foi solicitado o folder */
			switch ($conditionPage) {
				case 'login':
					$condArray = 0;
					break;
				case 'register':
					$condArray = 1;
					break;
				case 'bolos':
					$condArray = 2;
					break;
				case 'sendRecipePage':
					$condArray = 3;
					break;
				case 'contato':
					$condArray = 4;
					break;
				case 'index':
					$condArray = 5;
					break;
				
				default:
					# code...
					break;
			}

		/* Verificar o intervalos de dias no mês!!! */
		if($data > 0 && $data < 7){
			//$valor = '1 à 6';

			$folderLogin = "/imagens/folder/".$folder6;
			$folderArray[] = $folderLogin;

			$folderRegister = "/imagens/folder/".$folder2;
			$folderArray[] = $folderRegister;

			$folderBolos = "/imagens/folder/".$folder7;
			$folderArray[] = $folderBolos;

			$folderSendRecipePage = "/imagens/folder/".$folder5;
			$folderArray[] = $folderSendRecipePage;

			$folderContato = "/imagens/folder/".$folder3;
			$folderArray[] = $folderContato;

			$folderIndex = "/imagens/folder/".$folder4;
			$folderArray[] = $folderIndex;

		}else if($data > 6 && $data < 13){
			//$valor = '7 à 12';
			
			$folderLogin = "/imagens/folder/".$folder3;
			$folderArray[] = $folderLogin;

			$folderRegister = "/imagens/folder/".$folder1;
			$folderArray[] = $folderRegister;

			$folderBolos = "/imagens/folder/".$folder4;
			$folderArray[] = $folderBolos;

			$folderSendRecipePage = "/imagens/folder/".$folder6;
			$folderArray[] = $folderSendRecipePage;

			$folderContato = "/imagens/folder/".$folder5;
			$folderArray[] = $folderContato;

			$folderIndex = "/imagens/folder/".$folder2;
			$folderArray[] = $folderIndex;

		}else if($data > 12 && $data < 19){
			//$valor = '13 à 18';

			$folderLogin = "/imagens/folder/".$folder2;
			$folderArray[] = $folderLogin;

			$folderRegister = "/imagens/folder/".$folder7;
			$folderArray[] = $folderRegister;

			$folderBolos = "/imagens/folder/".$folder7;
			$folderArray[] = $folderBolos;

			$folderSendRecipePage = "/imagens/folder/".$folder6;
			$folderArray[] = $folderSendRecipePage;

			$folderContato = "/imagens/folder/".$folder3;
			$folderArray[] = $folderContato;

			$folderIndex = "/imagens/folder/".$folder1;
			$folderArray[] = $folderIndex;

		}else if($data > 18 && $data < 25){
			//$valor = '19 à 24';

			$folderLogin = "/imagens/folder/".$folder1;
			$folderArray[] = $folderLogin;

			$folderRegister = "/imagens/folder/".$folder4;
			$folderArray[] = $folderRegister;

			$folderBolos = "/imagens/folder/".$folder2;
			$folderArray[] = $folderBolos;

			$folderSendRecipePage = "/imagens/folder/".$folder5;
			$folderArray[] = $folderSendRecipePage;

			$folderContato = "/imagens/folder/".$folder7;
			$folderArray[] = $folderContato;

			$folderIndex = "/imagens/folder/".$folder6;
			$folderArray[] = $folderIndex;

		}else if($data > 24 && $data < 31){
			//$valor = '25 à 30';

			$folderLogin = "/imagens/folder/".$folder7;
			$folderArray[] = $folderLogin;

			$folderRegister = "/imagens/folder/".$folder6;
			$folderArray[] = $folderRegister;

			$folderBolos = "/imagens/folder/".$folder5;
			$folderArray[] = $folderBolos;

			$folderSendRecipePage = "/imagens/folder/".$folder4;
			$folderArray[] = $folderSendRecipePage;

			$folderContato = "/imagens/folder/".$folder1;
			$folderArray[] = $folderContato;

			$folderIndex = "/imagens/folder/".$folder2;
			$folderArray[] = $folderIndex;

		}else{
			//$valor = '31';

			$folderLogin = "/imagens/folder/".$folder1;
			$folderArray[] = $folderLogin;

			$folderRegister = "/imagens/folder/".$folder2;
			$folderArray[] = $folderRegister;

			$folderBolos = "/imagens/folder/".$folder3;
			$folderArray[] = $folderBolos;

			$folderSendRecipePage = "/imagens/folder/".$folder4;
			$folderArray[] = $folderSendRecipePage;

			$folderContato = "/imagens/folder/".$folder5;
			$folderArray[] = $folderContato;

			$folderIndex = "/imagens/folder/".$folder6;
			$folderArray[] = $folderIndex;

		}

    	return $folderArray[$condArray];

    }


}
