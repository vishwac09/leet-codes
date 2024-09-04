import { robotSim } from '../index';

describe('Problem walking robot simulatio test', () => {
  test('Test should pass and return 25', () => {
    expect(robotSim([4, -1, 3], [])).toStrictEqual(25);
  });
  test('Random cases', () => {
    // expect(robotSim([4, -1, 4, -2, 4], [[2, 4]])).toStrictEqual(65);
    expect(robotSim([6, -1, -1, 6], [])).toStrictEqual(36);
    expect(robotSim([9, -2, 2, -2, 2], [])).toStrictEqual(85);
  });
});
