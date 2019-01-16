import { src, dest, watch, series } from 'gulp';
import del from 'del';

export const clean = () => del(['dist']);
export const copy = () => src(['src/**/*']).pipe(dest('dist'));
export const watchForChanges = () => watch(['src/**/*'], copy);

export const dev = series(clean, copy, watchForChanges)
export const build = series(clean, copy)
export default dev;
