<?php

	class Request extends Controller {
		public function __construct() {
			$this->userModel = $this->initModel('Users');
		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => $_SESSION['type']
			];

			$this->showView('/request/index', $data);
		}

	
		public function doRequestUniversityID() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => 'sactive',
				'usrclass' => '',
				'stdclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => 'active',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/id', $data);

		}

		public function doLaptopBorrow() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => '',
				'usrclass' => '',
				'stdclass' => '',
				'borrowclass' => 'sactive',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => 'active',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/borrow', $data);

		}

		public function doLaptopRepair() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => '',
				'usrclass' => '',
				'stdclass' => '',
				'borrowclass' => '',
				'repairclass' => 'sactive',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => 'active',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/repair', $data);

		}

		public function doLaptopReturn() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => '',
				'usrclass' => '',
				'stdclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => 'sactive',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => 'active',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/return', $data);

		}

		public function doSubmissionOfLackingDocuments() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => 'sactive',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => 'active',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/lacking-documents', $data);
		}

		public function doRequestAcademicDocuments() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => 'sactive',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => 'active',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/academic-documents', $data);
		}
	
		public function doAccountEvaluation() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => 'sactive',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => 'active',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/evaluation', $data);
		}


		public function doCounseling() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => 'sactive',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => 'active',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/counseling', $data);
		}

		public function doRequestOfGoodMoral() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => 'sactive',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => 'active',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/cert', $data);
		}

		public function doPsychologicalTesting() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => 'sactive',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => 'active',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/psych-testing', $data);
		}

		public function doIndividualInventoryRecord() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => 'sactive',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => 'active',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/indv-inventory', $data);
		}

		public function doStudentNeedsAssessment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => 'sactive',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => 'active',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/needs-assessment', $data);
		}

		public function doFacultyEvaluation() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => 'sactive',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => 'active',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/faculty-eval', $data);
		}


		public function doLibraryCardApplication() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => 'sactive',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => 'active',
				'medicalclass' => '',
				'department' => 'library'
			];

			$this->showView('library/card-app', $data);
		}

		public function doLibraryOnlineReferenceService() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => 'sactive',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => 'active',
				'medicalclass' => '',
				'department' => 'library'
			];

			$this->showView('library/ref-service', $data);
		}

		public function doLibraryStudentAppointmentRequest() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => 'sactive',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => 'active',
				'medicalclass' => '',
				'department' => 'library'
			];

			$this->showView('library/stud-app', $data);
		}

		public function doOnlineConsultation() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => '',
				'libraryclass' => '',
				'medicalclass' => 'active',
				'consultclass' => 'sactive',
				'department' => 'medical'
			];

			$this->showView('medical/online-consultation', $data);
		}

		public function doRequestOrderOfPayment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => 'sactive',
				'tuitionclass' => '',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => 'active',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'finance'
			];

			$this->showView('finance/order-of-payment', $data);
		}

		public function doTuitionPayment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'usrclass' => '',
				'stdclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => 'sactive',
				'evalclass' => '',
				'consultclass' => '',
				'osasclass' => '',
				'registrarclass' => '',
				'guidanceclass' => '',
				'financeclass' => 'active',
				'libraryclass' => '',
				'medicalclass' => '',
				'department' => 'finance'
			];

			$this->showView('finance/tuition', $data);
		}
	}

?>