<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>assets/index.html">Dashboard 1</a></li>
                            <li><a href="<?= $baseurl ?>assets/index2.html">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Management</span></a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void()">Class</a>
                                <ul aria-expanded="false">
                                <li><a href="<?= $baseurl ?>class_add.php"> Add</a>
                                <li><a href="<?= $baseurl ?>class_list.php"> List</a>
                                </ul>
                            </li>
                            <li><a href="javascript:void()">Section</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?= $baseurl ?>section_add.php"> Add</a>
                                    <li><a href="<?= $baseurl ?>section_list.php"> List</a>
                                </ul>
                            </li>
                            <li><a href="javascript:void()">Group</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?= $baseurl ?>group_add.php"> Add</a>
                                    <li><a href="<?= $baseurl ?>group_list.php"> List</a>
                                </ul>
                            </li>
                            <li><a href="javascript:void()">Subject</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?= $baseurl ?>subject_add.php"> Add</a>
                                    <li><a href="<?= $baseurl ?>subject_list.php"> List</a>
                                </ul>
                            </li>
                            <li><a href="javascript:void()">Session</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?= $baseurl ?>session_add.php"> Add</a>
                                    <li><a href="<?= $baseurl ?>session_list.php"> List</a>
                                </ul>
                            </li>
                          
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-single-04"></i><span class="nav-text">Student</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>student_add.php">Add</a></li>
                            <li><a href="<?= $baseurl ?>student_list.php">List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-layout-25"></i><span class="nav-text">Student Marks</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>student_marks_add.php">Add</a></li>
                            <li><a href="<?= $baseurl ?>student_marks_list.php">List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Teacher</span></a>
                        <ul aria-expanded="false">
                           
                            <li><a href="<?= $baseurl ?>Teacher form .php">Add</a></li>
                            <li><a href="<?= $baseurl ?>teacher_list.php">List</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Teacher Information</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>department_add.php">Department</a></li>
                            <li><a href="<?= $baseurl ?>department_list.php">Department List</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>designation_add.php">Designation</a></li>
                            <li><a href="<?= $baseurl ?>designation_list.php">Designation List</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Attendance</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-form"></i><span class="nav-text">Student Attendance</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>student_attendance_add.php">Add</a></li>
                            <li><a href="<?= $baseurl ?>student_attendance_list.php">List</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-form"></i><span class="nav-text">Teacher Attendance</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>teacher_attendance_add.php">Add</a></li>
                            <li><a href="<?= $baseurl ?>teacher_attendance_list.php">List</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Subject</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-layout-25"></i><span class="nav-text">Class Subject</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= $baseurl ?>class_subject_add.php">Add</a></li>
                            <li><a href="<?= $baseurl ?>class_subject_list.php">List</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Fees</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Fees Category</span></a>
                        <ul aria-expanded="false">
                            <li><a href="fees_category_add.php">Add</a></li>
                            <li><a href="fees_category_list.php">List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Class Fees Setting</span></a>
                        <ul aria-expanded="false">
                            <li><a href="class_fees_setting_add.php">Add</a></li>
                            <li><a href="class_fees_setting_list.php">List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Student Fees</span></a>
                        <ul aria-expanded="false">
                            <li><a href="student_fees_add.php">Add</a></li>
                            <li><a href="student_fees_list.php">List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Student Fees Details</span></a>
                        <ul aria-expanded="false">
                            <li><a href="student_fees_details_add.php">Add</a></li>
                            <li><a href="student_fees_details_list.php">List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->