import {CommonModule} from '@angular/common';
import {NgModule} from '@angular/core';
import {RouterModule} from '@angular/router';

import {ReactiveFormsModule} from '@angular/forms';
import {MatButtonModule} from '@angular/material/button';
import {MatCardModule} from '@angular/material/card';
import {MatNativeDateModule, MatRippleModule} from '@angular/material/core';
import {MatDatepickerModule} from '@angular/material/datepicker';
import {MatIconModule} from '@angular/material/icon';
import {MatInputModule} from '@angular/material/input';
import {MatSelectModule} from '@angular/material/select';
import {MatSidenavModule} from '@angular/material/sidenav';
import {MatSliderModule} from '@angular/material/slider';
import {MatToolbarModule} from '@angular/material/toolbar';
import {FooterComponent} from './components/footer/footer.component';
import {HeaderComponent} from './components/header/header.component';
import {HomeComponent} from './components/home/home.component';
import {LandingPageComponent} from './components/landing-page/landing-page.component';
import {MatAutocompleteModule} from "@angular/material/autocomplete";

@NgModule({
    imports: [
        CommonModule,
        RouterModule,
        MatCardModule,
        MatButtonModule,
        MatSliderModule,
        MatToolbarModule,
        MatIconModule,
        MatSidenavModule,
        MatRippleModule,
        MatSelectModule,
        ReactiveFormsModule,
        MatDatepickerModule,
        MatNativeDateModule,
        MatInputModule,
        MatAutocompleteModule
    ],
  declarations: [
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    LandingPageComponent
  ],
  exports: [
    HeaderComponent,
    FooterComponent
  ],
  providers: [
    MatDatepickerModule,
  ]
})
export class CoreModule {
}
