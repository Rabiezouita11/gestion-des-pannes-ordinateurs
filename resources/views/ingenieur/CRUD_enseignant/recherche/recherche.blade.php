<form class="app-search"  action="{{ route('recherche')}}">
                          
                          <div class="input-group">
                              <input autocomplete="off" type="text"   name="r" class="form-control"  value ="{{ request()->r ??''}}" placeholder="Search..." required>
                              <div class="input-group-append">
                                  <button class="btn" type="submit">
                                      <i class="fe-search"></i>
                                  </button>
                            
                          </div>
                      </div>
                  </form>
         