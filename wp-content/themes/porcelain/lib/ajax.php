<?php
/**
 * Includes AJAX request handler functions.
 */

add_action( 'wp_ajax_pexeto_upload', 'pexeto_ajax_upload' );

if ( !function_exists( 'pexeto_ajax_upload' ) ) {

	/**
	 * Upload handler function. Uploads a file and loads the result in an array.
	 * If the file was uploaded successfully, the array contains the keys:
	 * - success : true
	 * - uploadurl : the URL of the upload directory
	 * - filename : the name of the uploaded file
	 * if the file as not uploaded successfully, the array contains the keys:
	 * - success : false
	 * - error : the error message
	 * The result is converted to a JSON string and echoed back as a responce.
	 */
	function pexeto_ajax_upload() {
		$res = array();

		if(empty($_POST['nonce']) || !wp_verify_nonce( $_POST['nonce'], 'pexeto_upload' )){
			$res['success']=false;
			$res['error'] = 'Nonce did not verify';
			echo json_encode( $res );
			exit;
		}

		if ( current_user_can( 'edit_posts' ) ) {
			$uploads_dir=wp_upload_dir();

			$id = media_handle_upload( 'pexetofile', 1);
			if ( $id ) {
				$res['success']=true;
				$att_src =  wp_get_attachment_image_src($id, 'full');
				$res['id'] = $id;
				$res['fileurl']= $att_src[0];
				$res['files']=$_FILES;
			} else {
				$res['success']=false;
			}
		}else {
			$res['success']=false;
			$res['error'] = 'You do not have permission to upload a file';
		}

		echo json_encode( $res );
		exit;
	}
}
