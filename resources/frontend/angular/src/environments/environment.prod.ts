import { AppEnvironment } from '../app/core/interfaces/app-environment.interface';

export const environment: AppEnvironment = {
  production: true,
  baseApiUrl: 'https://homycare.fr/api',
  security: {
    allowedOrigins: 'https://homycare.fr'
  }
};
