<?php
session_start();
include_once('security.php');
                        //PROFILING UPDATE
                    if(isset($_POST['update_btn']))
                    {
                        $id = $_POST['edit_id'];
                        $firstname = $_POST['edit_firstname'];
                        $midname = $_POST['edit_middle_name'];
                        $lastname = $_POST['edit_lastname'];
                        $email = $_POST['edit_email'];
                        $contact_number = $_POST['edit_contact'];
                        $gender = $_POST['edit_gender'];
                        $occupation = $_POST['edit_occupation'];
                        $birthday = $_POST['edit_birthdate'];
                        $civil_status= $_POST['edit_civil_status'];
                        $religion = $_POST['edit_religion'];
                        $address = $_POST['edit_address'];
                        $file = $_FILES["id_image"]['name'];
                        $email_query = "SELECT * FROM profiling_data WHERE email='$email' ";
                        $result = mysqli_query($db, $email_query);
                        if(!$email_result->num_rows >0)
                        {
                             $query = "UPDATE profiling_data SET firstname='$firstname', midname='$midname', lastname='$lastname', email='$email', contact_number='$contact_number', gender='$gender', occupation='$occupation', birthday='$birthday', civil_status='$civil_status', religion='$religion', address='$address', file='$file' WHERE id='$id'";
                                $result = mysqli_query($db, $query);
                                if($result)
                                {
                                    move_uploaded_file($_FILES["id_image"]["tmp_name"], "mainindex/main/img".$_FILES["id_image"]["name"]);
                                    $_SESSION['success'] = "YOUR DATA IS UPDATED";
                                    header('Location: barangay_profiling.php');
                                }
                                else
                                {
                                    $_SESSION['status'] = "YOUR DATA IS NOT UPDATED";
                                    header('Location: barangay_profiling.php');
                                }
                        }
                        else
                        {
                                $_SESSION['status'] = "YOUR EMAIL ALREADY EXIST";
                                header('Location: barangay_profiling.php');
                        } 
                    }
              ?>


