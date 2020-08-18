<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');


	//add company
	if(isset($_POST['create'])){
		$companyname 	= $_POST['companyname'];
		$profile_description 	= $_POST['profile_description'];
        $industry = $_POST['industry'];
        $comp_website =$_POST['comp_website'];
        $logo =$_POST['logo'];
        $user_id =$_POST['user_id'];

		if(empty($companyname) || empty($profile_description) || empty($industry)  || empty( $comp_website)  || empty($logo) || empty( $user_id)){
			header('location: ../views/create_company.php?error=null_value');
		}else{

			$company = [
				'company_name'=> $companyname ,
				'profile_description'=> $profile_description,
                'industry'=>$industry,
                'company_website'=>$comp_website,
                'company_logo'=>$logo,
                'user_account_id'=>$user_id
			];

			$status = insert($company);

			if($status){
				header('location: ../views/all_company.php?success=done');
			}else{
				header('location: ../views/create_company.php?error=db_error');
			}
		}
	}

	//update company
	if(isset($_POST['edit'])){
        $companyname = $_POST['companyname'];
		$profile_description 	= $_POST['profile_description'];
        $industry = $_POST['industry'];
        $comp_website =$_POST['comp_website'];
        $logo =$_POST['logo'];
        $user_id =$_POST['user_id'];
		$id 	= $_POST['id'];

        if(empty($companyname) || empty($profile_description) || empty($industry)  || empty( $comp_website)  || empty($logo) || empty( $user_id)){
			header('location: ../views/create_company.php?error=null_value');
		}else{

			$company = [
				'company_name'=> $companyname ,
				'profile_description'=>$profile_description,
                'industry'=>$industry,
                'company_website'=>$comp_website,
                'company_logo'=>$logo,
                'user_account_id'=>$user_id,
                'id'=> $id
			];

			$status = update($company);

			if($status){
				header('location: ../views/all_company.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

?>