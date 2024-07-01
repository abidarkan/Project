<?php $data['count'] = $count;
$data['count_edited'] = $count_edited;
$data['count_completed'] = $count_completed;
$data['count_rejected'] = $count_rejected;
$data['recent'] = $recent;
?>

<?php $this->load->view('layout/Navbar')?>
<?php $this->load->view('layout/ContentDashboardStaff', $data)?>
<?php $this->load->view('layout/Footer')?>