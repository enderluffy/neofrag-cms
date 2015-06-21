<form class="form-inline" action="<?php echo $NeoFrag->config->base_url.$NeoFrag->config->request_url; ?>" method="post">
	<div class="form-group">
		<label for="form_{form_id}_user">Joueur</label>
		<select class="form-control" name="{form_id}[user_id]">
			<option></option>
			<?php foreach ($data['users'] as $user): ?>
			<option value="<?php echo $user['user_id']; ?>"<?php if ($user['in_team']) echo ' disabled="disabled"'; ?>><?php echo $user['username']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group" style="margin: 0 20px;">
		<label for="form_{form_id}_user">Rôle</label>
		<select class="form-control" name="{form_id}[role_id]">
			<option></option>
			<?php foreach ($data['roles'] as $role): ?>
			<option value="<?php echo $role['role_id']; ?>"><?php echo $role['title']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<input type="submit" class="btn btn-primary" value="Ajouter" />
</form>