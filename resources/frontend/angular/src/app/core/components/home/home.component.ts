import {Component, OnInit} from '@angular/core';
import {FormControl, FormGroup} from '@angular/forms';
import {of, Observable} from 'rxjs';
import {User} from '../../../shared/model/user';
import {CityService} from '../../services/city.service';
import {ConfigurationService} from '../../services/configuration.service';

// @TODO: move to classes place
export class City {
  name: string;
  postCode: number;
}

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {
  prestations = new FormControl();
  stateGroup = new FormControl();
  appointmentDate = new FormControl();

  prestationList: string[] = [];
  cities: City[] = [];

  constructor(
    private cityService: CityService,
    private configurationService: ConfigurationService,
  ) {
    this.configurationService.configuration$.subscribe(conf =>
      this.prestationList = conf.prestationList);

    this.cityService.cities$.subscribe(cities =>
      this.cities = cities);

    this.stateGroup.valueChanges.subscribe(v =>
      cityService.refreshCities(v).subscribe(cities =>
        this.cities = cities));
  }

  ngOnInit() {
  }

  datePickerFilter = (d: Date | null): boolean => {
    const day = (d || new Date()).getDay();
    // Prevent Saturday and Sunday from being selected.
    return ![0, 6].includes(day);
  }

  showCity = (city: City): string =>
    city.name + (city.postCode ? ' (' + city.postCode + ')' : '')


  get users(): Observable<User[]> {
    return of([{
      id: 1,
      name: 'toto',
      mail: 'toto@free.fr',
    }, {
      id: 2,
      name: 'titi',
      mail: 'titi@free.fr',
    }]);
  }

}
