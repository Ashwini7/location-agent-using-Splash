<?php
/**
 * @file
 * Contains Drupal\migrate_submissions\Controller\MigrateSubmissionsController.
 */

namespace Drupal\migrate_submissions\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Drupal\file\Entity\File;

class MigrateSubmissionsController extends ControllerBase {


	/**
	 * funtion for admin
	 */
	public function admin() {

		return array(
				'#type' => 'markup',
				'#markup' => t('Admin'),
				'#content' => 'Admin Page',
		);

	}

	/**
	 * funtion for webformsubmissions
	 */
	public function webformsubmissions() {

     $db = array (
        'database' => 'srijanlive',
        'username' => 'srijanlive',
        'password' => 'srijanlive',
        'prefix' => '',
        'host' => '192.168.0.1',
        'port' => '3306',
        'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
        'driver' => 'mysql',
    );
    Database::addConnectionInfo('upgrade', 'default', $db);
    $connection = Database::getConnection('default', 'upgrade');
    $data = $connection->query('SELECT * FROM {file_managed} WHERE fid > 5984 ')->fetchAll();
    $batch_limit = count($data);
    // loop through the file and stop at batch limit
  	for ($i = 0; $i < $batch_limit; $i++) {
	    /*echo "<pre>";
	    print_r($data[$i]);*/
			$fid = $data[$i]->fid;
	    // Generating UUID
	    $uid = $data[$i]->uid;
      $uuid = \Drupal::service('uuid');
      $uuid = $uuid->generate();
      $filename = $data[$i]->filename;
      $uri = $data[$i]->uri;
      $filemime = $data[$i]->filemime;
      $filesize = $data[$i]->filesize;
      $status = $data[$i]->status;
      $created = $data[$i]->timestamp;
      $changed = $created;

			/*$sql = 'DELETE FROM {file_managed} WHERE fid > 5984';
			db_query($sql);*/

      /*db_insert('file_managed') // Table name no longer needs {}
	    ->fields(array(
	      'fid' => $fid,
	      'uuid' => $uuid,
	      'langcode' => 'en',
	      'uid' => $uid,
	      'filename' => $filename,
	      'uri' => $uri,
	      'filesize' => $filesize,
	      'status' => $status,
	      'created' => $created,
	      'changed' => $changed,
	      ))->execute();*/
			die('heylo');
  	}

  	/*
		// Insert Contact Message handler.
      db_insert('contact_message') // Table name no longer needs {}
      ->fields(array(
        'fid' => 'ask_for_demo',
        'uuid' => $uuid,
        'name' => $csv_line['5'],
        'langcode' => 'en',
        'mail' => $csv_line['4'],
        'created' => $csv_line['1'],
        ))->execute();
// Insert handler.

        */
	}
}
