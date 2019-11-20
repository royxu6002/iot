<div class="m-1">
        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#contact-box-modal{{$comment->id}}">
        Reply
        </button>
        <div class="modal fade" id="contact-box-modal{{$comment->id}}" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon bg-dark" data-src="assets/img/icons/interface/cross.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M16.2426 6.34311L6.34309 16.2426C5.95257 16.6331 5.95257 17.2663 6.34309 17.6568C6.73362 18.0473 7.36678 18.0473 7.75731 17.6568L17.6568 7.75732C18.0473 7.36679 18.0473 6.73363 17.6568 6.34311C17.2663 5.95258 16.6331 5.95258 16.2426 6.34311Z" fill="#212529"></path>
                            <path d="M17.6568 16.2426L7.75734 6.34309C7.36681 5.95257 6.73365 5.95257 6.34313 6.34309C5.9526 6.73362 5.9526 7.36678 6.34313 7.75731L16.2426 17.6568C16.6331 18.0473 17.2663 18.0473 17.6568 17.6568C18.0474 17.2663 18.0474 16.6331 17.6568 16.2426Z" fill="#212529"></path>
                        </svg>
                      </button>
                      <div class="m-3">
                        <form action="{{ route('comment.reply') }}" method="post">
                        @csrf
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                      <div class="form-group">
                        <textarea name="content" rows="5" class="form-control" required="" @if(Auth::check()) placeholder="Type your reply here"  @else disabled placeholder="Please sign in first to reply the comment."  @endif></textarea>
                      </div>
                      <div class="d-none alert alert-danger" role="alert" data-error-message="">
                        Please fill all fields correctly.
                      </div>
                      <div class="d-none alert alert-success" role="alert" data-success-message="">
                        Thanks, a member of our team will be in touch shortly.
                      </div>
                      <button type="submit" class="btn btn-block btn-primary btn-loading" data-loading-text="Sending" @if(Auth::check()) @else disabled @endif>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon" data-src="assets/img/icons/theme/code/loading.svg">
                            <title>Icon For Loading</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g>
                                    <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                </g>
                                <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                            </g>
                        </svg>
                        <span>Send</span>
                      </button>
                    </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

