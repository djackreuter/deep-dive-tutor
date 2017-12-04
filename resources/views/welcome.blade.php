@extends('layouts.master')

@section('content')
<div class="page-header">
			<div class="container">
			   <h1>Welcome to Deep Dive Tutor!</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2>About Us</h2>
					<p>Striker brace UEFA European Championship chip one-two African Cup of Nations three-five-two
						four-four-two yellow card upper 90 hat trick ball forward. Hat trick center-half referee goalie
						one-two soccer World Cup upper 90 midfielder forward striker UEFA European Championship red card
						four-four-two goal. Four-four-two halftime center-half goal hat trick goalie African Cup of Nations
						referee one-two yellow card forward UEFA European Championship pitch. Midfielder one-two pitch chip
						goalie halftime soccer forward upper 90 number 10 UEFA European Championship referee defender
						center-half ball World Cup goal.Defender number 10 World Cup pitch ball yellow card soccer
						four-four-two striker center-half hat trick upper 90 one-two halftime goalie three-five-two UEFA
						European Championship. Three-five-two goalie hat trick upper 90 World Cup one-two chip halftime
						midfielder center-half striker forward pitch defender yellow card UEFA European Championship.
					</p>
				</div><!-- /.col-md-5 -->
				<div class="col-md-5">
					<div class="well well-lg">
						<h4>Login</h4>
						<form>
							<div class="form-group">
								<label for="email-login">Email</label>
								<input type="email" class="form-control" id="email-login" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">Login</button>

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign Up
							</button>
						</form>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Sign Up</h4>
									</div>
									<div class="modal-body">
										<form>
                      {{ csrf_field() }}
											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" class="form-control" id="name" placeholder="Name">
											</div>
											<div class="form-group">
												<label for="email-signup">Email</label>
												<input type="email" class="form-control" id="email-signup" placeholder="Email">
											</div>
											<div class="form-group">
												<label for="password-new">Create Password</label>
												<input type="password" class="form-control" id="password-new"
														 placeholder="Create Password">
											</div>
											<div class="form-group">
												<label for="password-new-conf">Re-Enter Password</label>
												<input type="password" class="form-control" id="password-new-conf"
														 placeholder="Re-Enter Password">
											</div>
											<div class="form-group">
												<label for="bio">Bio</label>
												<textarea class="form-control" id="bio"
															 placeholder="500 Characters Max"></textarea>
											</div>
											<div class="form-group">
												<label for="profile-type-s">Profile Type</label>
											</div>
											<input type="radio" id="profile-type-s"
													 name="gender" value="tutor" checked>
											<label for="profile-type-s">Student</label>
											<input type="radio" id="profile-type-t"
													 name="gender" value="tutor">
											<label for="profile-type-t">Tutor</label>
										</form>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
											<button type="button" class="btn btn-success">Sign Up</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /. well well-lg -->
				</div><!-- /.col-md-5 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
@endsection
