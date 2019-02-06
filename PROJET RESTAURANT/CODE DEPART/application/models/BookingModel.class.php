<?php
class BookingModel {

  public function booking($post, $userId){
      	$data = new Database();

          $data->executeSql(

          	'INSERT INTO Booking
              	(
                      User_Id,
                      BookingDate,
                      BookingTime,
                      CreationTimestamp,
                      NumberOfSeats
  				)

                 VALUES (?, ?, ?, NOW(), ?)',

                 [
                 		$userId,
                      $post['bookingYear'].'-'.$post['bookingMonth'].'-'.$post['bookingDay'],
                      $post['bookingHour'].':'.$post['bookingMinute'],
                      $post['numberOfSeats']

                 ]
          );

      }



}





?>
