<?php
    // start a session
    session_start();

    // establish db connection
    require("../Account/db.php");

    // import helper methods
    require("../Account/helper.php");

    // check if user is logged in, else redirect to user_dashboard
    if (!isset($_SESSION["user_id"])) {
        header("Location: login.php");
        exit();
    }

    $_SESSION["create_project"] = true;

    // retrieve user details
    $user_details = get_user_details($_SESSION["user_id"], "user_id");

    // ensure that the request is a POST request
    if (strstr($_SERVER['HTTP_REFERER'], "create_project.php")) {

        // collect form data
        $name = $_POST["project-name"];
        $description = $_POST["project-description"];
        $project_image = $_FILES["project-image"]["name"];
        $visibility = $_POST["project-visibility"];
        $member_acquisition = $_POST["project-membership"];

        // Check file type
        $allowed_image_types = ["image/jpeg", "image/jpg", "image/png", "image/svg"];

        if (!in_array($_FILES["project-image"]["type"], $allowed_image_types)) {
            echo '<script>alert("Invalid file type! Only JPEG, PNG, and JPG images are allowed.")</script>';
            $_SESSION["invalid-image-type"] = true;
            exit();
        }

        // upload project image to project_images
        $project_image_dir = "../assets/images/project_images/";
        if (!move_uploaded_file($_FILES["project-image"]["tmp_name"], $project_image_dir . $name . "-" . $project_image)) {
            echo '<script>alert("Failed to upload image!")</script>';
            $_SESSION["image_upload_failed"] = true;
            exit();
        }

        // insert query
        $insert_query = $connection->prepare("INSERT INTO project (user_id, project_name, project_description,
            project_image, visibility, member_acquisition) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_query->bind_param("isssss", $_SESSION["user_id"], $name, $description, $project_image, $visibility, $member_acquisition);
        $insert_query->execute();

        // check if the query was successful
        if ($insert_query->affected_rows > 0) {

            // retrieve newly created project
            $get_sql = $connection->prepare("SELECT * FROM project WHERE project_name=?");
            $get_sql->bind_param("s", $name);
            $get_sql->execute();
            $row = $get_sql->get_result();

            // check if the query was successful
            if ($row->num_rows > 0) {
                // fetch associated data
                $project_details = $row->fetch_assoc();
 
                // retrieve the admin role details
                $admin_details = get_admin_role();

                if ($admin_detaiils == -1) {
                    $_SESSION["create-project-member-failed"] = true;
                    header("Location: create_project.php");
                    exit();
                }

                // create the project member
                $project_member = $connection->prepare("INSERT INTO project_members (user_id, project_id, role_id) VALUES (?, ?, ?)");
                $project_member->bind_param("iii", $_SESSION["user_id"], $project_details["project_id"], $admin_details["role_id"]);
                $project_member->execute();

                // check if the query was successful
                if ($project_member->affected_rows > 0) {
                    // echo '<script>alert("Project member created successfully!")</script>';
                    header("Location: view_project.php?project_id=" . $project_details["project_id"]); 
                    exit();
                } else {
                    echo '<script>alert("Error 1!")</script>';
                    $_SESSION["create-project-member-failed"] = true;
                    // header("Location: create_project.php");
                    exit();
                }
            } else {
                echo '<script>alert("Error 2!")</script>';
                $_SESSION["create-project-failed"] = true;
                // header("Location: create_project.php");
                exit();
            }

        } else { 
            echo '<script>alert("Error 3!")</script>';
            $_SESSION["create_project_failed"] = true;
            // header("Location: create_project.php");
            exit();
        }
    
    } else {
        echo '<script>alert("Error 4!")</script>';
        $_SESSION["invalid_request"] = true;
        // header("Location: create_project.php");
        exit();
    }
?>