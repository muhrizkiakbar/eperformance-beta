Rails.application.routes.draw do

  devise_for :users

  devise_scope :user do
    get "/login" => "devise/sessions#new", :as => :new_user_session_path
    post "/login" => "devise/sessions#create", :as => :user_session_path
    delete "/logout" => "devise/sessions#destroy", :as => :destroy_user_session_path
  end

  # devise_for :user, :controllers => { :registrations => "devise/registrations" } do 
  #   get 'signup' => 'devise/registrations#new', :as => :new_user_registration 
  #   post 'signup' => 'devise/registrations#create', as => :user_registration
  #   delete 'signup' => 'devise/registrations#destroy', as => :destroy_user_registration
  # end

  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
