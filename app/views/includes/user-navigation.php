<nav class="user-nav">
	<ul class="user-nav-list">
		<li class="user-nav-list-header">Choose Option</li>
		<a href="<?php echo URLROOT; ?>/user/student"><li class="<?php echo $data['stduserclass'] ?>">Student Management</li></a>
		<a href="<?php echo URLROOT; ?>/user/admin"><li class="<?php echo $data['admuserclass'] ?>">Admin Management</li></a>
		<a href="<?php echo URLROOT; ?>/user/audit"><li class="<?php echo $data['auditclass'] ?>">Audit Trail</li></a>
	</ul>
</nav>